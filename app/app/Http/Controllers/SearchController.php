<?php

namespace App\Http\Controllers;

use App\Models\CityModel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        $title = $request->get('search');
        $searchTerm= $request->get('search');
        $articles = CityModel::where('name', 'LIKE', "%{$searchTerm}%")->orderBy('name','asc')->get();
        $day = date('l');
        $time = date('H:i');
        

        return view('search', compact('articles', 'searchTerm','title','day','time'));
    }
}
