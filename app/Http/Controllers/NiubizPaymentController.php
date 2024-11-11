<?php

namespace App\Http\Controllers;

// use App\CentralLogics\Helpers;
use App\Models\Appointment;
use App\Models\Treatment;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Payment;

class NiubizPaymentController extends Controller
{
    public function viewNiubiz(Request $request, $appointment_id)
    {

        try{
            $appointment = Appointment::with(['treatment'])
                ->where('id', $appointment_id)
                ->firstOrFail();
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Appointment not found'
            ], 404);
        }

        $totalPrice = $appointment->treatment->price;


        $code = "integraciones@niubiz.com.pe" . ':' . "_7z3@8fF";
        $encodedCode = base64_encode($code);
        $merchantId = 456879852;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://apitestenv.vnforapps.com/api.security/v1/security', [
            'headers' => [
                'accept' => 'text/plain',
                'authorization' => 'Basic '.$encodedCode,
            ],
        ]);

        $response_token = $response->getBody();

        $response_sesion_token = $client->request('POST', 'https://apisandbox.vnforappstest.com/api.ecommerce/v2/ecommerce/token/session/'.$merchantId, [
            'headers' => [
                'Authorization' => (string) $response_token,
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode([
                "channel"=>"web",
                "amount"=>$totalPrice,
            ]),
        ]);

        $response_session = $response_sesion_token->getBody();
        $session_key = json_decode($response_session)->sessionKey;

        return view('pay-niubiz', compact('session_key', 'merchantId', 'response_token', 'appointment','totalPrice'));
    }

    public function success(Request $request, $appointment_id)
    {
        try{
            $appointment = Appointment::with(['treatment'])
                ->where('id', $appointment_id)
                ->firstOrFail();
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Appointment not found'
            ], 404);
        }

        $totalPrice = $appointment->treatment->price;

        $transactionToken = $request->transactionToken;
        $response = new \GuzzleHttp\Client();
        $merchantId = 456879852;
        $response = $response->request('POST', 'https://apisandbox.vnforappstest.com/api.authorization/v3/authorization/ecommerce/'.$merchantId, [
            'headers' => [
                'Authorization' => $request->_token,
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode([
                "captureType" => "manual",
                "channel" => "web",
                "countable" => true,
                "order" => [
                    "amount" => $totalPrice,
                    "currency" => "PEN",
                    "purchaseNumber" => $appointment_id,
                    "tokenId" => $transactionToken
                ]
            ]),
        ]);

        $response = json_decode($response->getBody());

        if($response->dataMap->ACTION_CODE == "000"){
            $payment = Payment::where('appointment_id', $appointment_id)->first();
            if ($payment) {
                $payment->status = 'Pagado';
                $payment->save();

                return redirect()->route('payment-success');
            }
            return redirect()->route('payment-alreadyPaid');

        } else {
            return redirect()->route('payment-fail');
        }

    }


}
