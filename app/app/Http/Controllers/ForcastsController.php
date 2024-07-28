<?php

namespace App\Http\Controllers;

use App\Models\CitiesModel;
use App\Models\ForcasterModel;
use Illuminate\Http\Request;

class ForcastsController extends Controller
{
    //

    public function loadCity(CitiesModel $city)
    {
        $title = $city->name;
        return view('forcasts',compact('city','title'));
    }
}
