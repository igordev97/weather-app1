<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForcasterModel extends Model
{
    use HasFactory;
    protected $table = 'forecasts';
    protected $fillable = [
        'city_id',
        'temperature',
        'date'
    ];
}
