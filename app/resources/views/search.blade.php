@extends('layouts.layout')
@section('main')
    <div class="container">
        <h1 class="display-2 text-center">Weather app - Search</h1>

        <div class="row mt-5">
            <div class="col-12 d-flex flex-wrap justify-content-center gap-2 ">
                @if(count($articles) !== 0)
                    @foreach($articles as $city)
                        @component('components.city-box',['city'=>$city,'day'=>$day,'time'=>$time])
                        @endcomponent
                    @endforeach
                @else
                    <h3><em>{{$searchTerm}}</em> not found</h3>
                @endif

            </div>
        </div>
    </div>
@endsection
