<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationReservations extends Model
{
    use HasFactory;
    protected $table = 'destination_reservations';
    public $timestamps = false;
    
    protected $fillable = [
        'user_id',
        'destination_id',
        'reserv_status_id'
    ];
}
