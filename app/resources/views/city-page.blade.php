@extends('layouts.layout')

@section('main')
    <div class="container">
        <div class="col-6 mx-auto">
            <h1 class="text-center">Add new city</h1>
            <form action="{{route('city.save',['city'=>$city->id])}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Enter City Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$city->name}}">
                </div>


                <div class="form-group my-3">
                    <label for="min" class="form-label">Enter Min Temperature:</label>
                    <input type="number" name="min" id="min" class="form-control"  value="{{$city->min}}">
                </div>
                <div class="form-group my-3">
                    <label for="max" class="form-label">Enter Max Temperature:</label>
                    <input type="number" name="max" id="max" class="form-control" value="{{$city->max}}">
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Enter Date:</label>
                    <input type="date" name="date" id="date" class="form-control" value="{{$city->date}}">
                </div>


                <div class="form-group my-3">
                    <label for="weather">Choose Weather</label>
                    <select name="weather" id="weather" class="form-select">
                        <option value="sunny">Sunny</option>
                        <option value="snow">Snow</option>
                        <option value="storm">Storm</option>
                        <option value="rain">Rain</option>
                        <option value="cloudy">Cloudy</option>
                    </select>
                </div>


                <button class="btn btn-primary">Save change</button>


            </form>
            @if($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
            @if(session()->has('success'))
                <p class="text-success">{{session('success')}}</p>
            @endif

        </div>
    </div>
@endsection
