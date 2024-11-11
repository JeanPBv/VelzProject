<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333333;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }

        .pay-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .pay-button:hover {
            background-color: #45a049;
        }

        .card {
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-content {
            font-size: 16px;
        }

        li {
            color: #d4af37;
        }

    </style>
</head>

<body>
    <div class="container">
        <img class="logo"
            src="https://firebasestorage.googleapis.com/v0/b/fidelio-core-platform-test.appspot.com/o/Velz-Logo.png?alt=media&token=d0ddc727-3f0e-4354-9601-affbfc38d900"
            alt="Logo">
        <h1>Pagar con Niubiz</h1>
        <div class="card-content">
            <p>Cita: {{$appointment->treatment->name}}</p>
            <p>Monto Total: S/.{{$totalPrice}}</p>
        </div>
        <form action="{!!route('niubiz-success', ['appointment_id'=>$appointment->id, '_token' => $response_token ])!!}" method="POST">
            <script type="text/javascript"
                src="https://static-content-qas.vnforapps.com/env/sandbox/js/checkout.js"
                data-sessiontoken="{{$session_key}}"
                data-channel="web"
                data-merchantid="{{$merchantId}}"
                data-purchasenumber="{{$appointment->id}}"
                data-amount="{{$totalPrice}}"
                data-expirationminutes="20"
                data-timeouturl="about:blank"
                data-merchantlogo="img/niubiz.png"
                data-formbuttoncolor="#000000">
            </script>

        </form>
    </div>
</body>

</html>
