@extends('layouts.layout')
@section('main')
    <div class="container">
                <h1 class="display-2 text-center">Weather app</h1>

        <div class="row mt-5">
            <div class="col-12 d-flex flex-wrap justify-content-center gap-2 ">

                   @foreach($cities as $city)
                    @component('components.city-box',['city'=>$city,'day'=>$day,'time'=>$time])
                    @endcomponent
                   @endforeach



            </div>
        </div>
    </div>
@endsection
