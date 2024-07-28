<?php

namespace App\Http\Controllers;

use App\Models\CitiesModel;
use App\Models\ForcasterModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ForcastsController extends Controller
{
    //

    public function loadCity(CitiesModel $city)
    {
        $title = $city->name;
        return view('forcasts_single',compact('city','title'));
    }

    public function loadForecasts(){
        $title = 'Forecasts';
        $cities = CitiesModel::all();
        return view('forecasts',compact('cities','title'));
    }

    public function saveForecast(Request $request)
    {

        $request->validate([
            'city' => 'required',
            'temperature' => 'required',
            'weather_type' => 'required',
            'date' => 'required',
            'probability' => 'required',
        ]);



        $city = CitiesModel::where('name',$request->get('city'))->first();
        $date = $request->get('date');


        ForcasterModel::create([
            'city_id' => $city->id,
            'temperature' => $request->get('temperature'),
            'date'=>$date,
            'weather_type'=>$request->get('weather_type'),
            'probability'=> $request->get('probability'),
            'dayWeek'=> Carbon::parse($date)->format('l')

        ]);


        return redirect()->back();

    }
}
