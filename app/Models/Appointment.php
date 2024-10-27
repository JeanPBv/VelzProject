<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;     
use App\Models\Treatment;  

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_appointment',
        'time_appointment',
        'status',
        'reminder',
        'user_id',
        'treatment_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }
}
