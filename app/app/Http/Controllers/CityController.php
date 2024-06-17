<?php

namespace App\Http\Controllers;

use App\Models\CityModel;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function addCity(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'min'=>'required',
            'max'=>'required',
            'date'=>'required',
            'weather'=>'required',
        ]);

        CityModel::create([
            'name'=>$request->get('name'),
            'min'=>$request->get('min'),
            'max'=>$request->get('max'),
            'date'=>$request->get('date'),
            'weather'=>$request->get('weather'),
        ]);
        session()->flash('success','City added successfully');
        return redirect()->back();
    }

    public function editLoader(){
        $cities = CityModel::orderBy('name','desc')->get();;
        $title = "Edit";
        return view('edit-city',compact('title','cities'));
    }

    public function updateCity(CityModel $city)
    {
        $title = $city->name.'-  edit';
        return view('city-page',compact('city','title'));
    }

    public function deleteCity(CityModel $city){
        $city->delete();
        session()->flash('success','City deleted successfully');
        return redirect()->back();
    }

    public function saveUpdate(Request $request,CityModel $city)
    {

        $request->validate([
            'min'=>'required',
            'min'=>'required',
            'max'=>'required',
            'date'=>'required',
            'weather'=>'required',
        ]);
        $city->name = $request->name;
        $city->min = $request->get('min');
        $city->max = $request->get('max');
        $city->date = $request->get('date');
        $city->weather = $request->get('weather');
        $city->save();

        session()->flash('success','City updated successfully');
        return redirect()->back();

    }
}
