<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $table = 'destinations';

    protected $fillable = [
        'name',
        'description',
        'cost',
        'dest_type_id',
        'state_id',
        'dest_transp_type_id',
        'created_by_id',
        'capacity',
        'picture'
        
    ];
}
