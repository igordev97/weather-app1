<?php

namespace App\Http\Controllers;

use App\Models\CityModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function loadCities(){
        $title = 'Weather App';
        $cities = CityModel::orderBy('name','desc')->get();
        $day = date('l');
        $time = date('H:i');
        return view('welcome', compact('title','cities','day','time'));
    }
}
