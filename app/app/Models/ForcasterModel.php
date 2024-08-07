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
        'date',
        'probability',
        'dayWeek'
    ];

    const WEATHER_TYPE = ['sunny','rain','storm','snow','cloudy'];


    public function city(){
        return $this->hasOne(CitiesModel::class, 'id', 'city_id');
    }
}
