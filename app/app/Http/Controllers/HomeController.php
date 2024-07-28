<?php

namespace App\Http\Controllers;

use App\Models\CityModel;
use App\Models\WeatherModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function loadCities(){
        $title = 'Weather App';
        $cities = CityModel::orderBy('name','asc')->get();
        $day = date('l');
        $time = date('H:i');

        $allWeather = WeatherModel::all();
        return view('welcome', compact('title','cities','day','time','allWeather'));
    }
}
