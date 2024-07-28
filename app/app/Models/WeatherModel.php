<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherModel extends Model
{
    use HasFactory;
    protected $table = 'weather';
    protected $fillable = [
        'city_id',
        'temperature',
        'date'
    ];


    public function city(){
        return $this->hasOne(CitiesModel::class, 'id', 'city_id');
    }
}
