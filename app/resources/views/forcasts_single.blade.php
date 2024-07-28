@extends('layouts.layout')


@section('main')

    <h1>{{$city->name}}</h1>

    <div class="row">
        <div class="col-9 mx-auto d-flex flex-wrap gap-2 justify-content-center">
            @foreach($city->forcasts as $weather)
                <div class="city-card col-3">

                    <div class="row d-flex justify-between">
                        <div class="col-6 d-flex flex-column align-items-center">
                            <img src="{{asset('/images/'.$weather->weather_type.'.png')}}" alt="sunny" width="100px">

                            <span>{{$city->weather}}</span>
                        </div>
                        <div class="col-6">
                            <h4 class="text-right">Temp <span>{{$weather->temperature}}<sup>O</sup></span></h4></span></h4>
                            <h6 class="text-right">Verovatnoca padavina {{$weather->probability}}%</h6>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 d-flex flex-column align-middle">
                            <h1 class="text-center">{{$city->name}}</h1>
                            <p class="text-center">{{$weather->date}}</p>
                            <p class="text-center">{{$weather->weather_type}}</p>
                            <p class="text-center">{{$weather->dayWeek}}</p>
                        </div>
                    </div>

                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
