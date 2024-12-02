<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Dentist;    


class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'dentist_id',
        'user_id',
        'appointment_id',
        'rating',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dentist()
    {
        return $this->belongsTo(Dentist::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
