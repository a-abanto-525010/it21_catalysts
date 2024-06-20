<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'arrival_time',
        'appointment_time',
        'reason_for_visit',
        'priority',
        'status',
    ];
}
