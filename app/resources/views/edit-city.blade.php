@extends('layouts.layout')


@section('main')

    <div class="container">
        <div class="row">
            <div class="col-9 mx-auto">
               @if(count($cities) == 0)
                   <h2 class="display-3">0 cities found</h2>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#id</th>
                            <th scope="col">City Name</th>
                            <th scope="col">Min Temperature</th>
                            <th scope="col">Max Temperature</th>
                            <th scope="col">Max Temperature</th>
                            <th scope="col">Weather</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cities as $city)
                            <tr>
                                <td>{{$city->id}}</td>
                                <td>{{$city->name}}</td>
                                <td>{{$city->min}}</td>
                                <td>{{$city->max}}</td>
                                <td>{{$city->date}}</td>
                                <td>{{$city->weather}}</td>
                                <td><a href="{{route('edit.update',['city'=>$city->id])}}" class="btn btn-primary">Update</a></td>
                                <td><a href="{{route('edit.delete',['city'=>$city->id])}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @if(session()->has('success'))
                        <p class="text-success">{{session('success')}}</p>
                    @endif
               @endif
            </div>
        </div>
    </div>
@endsection
