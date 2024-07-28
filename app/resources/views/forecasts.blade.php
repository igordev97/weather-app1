@extends('layouts.layout')
@section('main')
  <div class="row">
      <div class="col-9 mx-auto">
          <form action="{{route('forecasts.add')}}" method="post">
              @csrf
              <select name="city" id="city">
                  @foreach($cities as $city)
                      <option value="{{$city->name}}">{{$city->name}}</option>
                  @endforeach
              </select>
              <input type="number" name="temperature" id="temperature" placeholder="Enter temp">
              <select name="weather_type" id="weather_type">
                  <option value="sunny">Sunny</option>
                  <option value="snow">Snow</option>
                  <option value="rain">Rain</option>
                  <option value="cloudy">Cloudy</option>
                  <option value="storm">Storm</option>
              </select>

              <input type="date" name="date">
              <input type="number" min="0" max="100" name="probability" placeholder="Enter verovatnocu padavina u %" id="probability">%

              <button class="btn btn-primary">Save</button>
          </form>

          @if($errors->any())
              <p class="text-danger">{{$errors->first()}}</p>
          @endif
          @foreach($cities as $city)
              <p>{{$city->name}}</p>
              @foreach($city->forcasts as $weather)
                  <p>{{$weather->date}} - {{$weather->temperature}}<sup>0</sup> -- {{$weather->dayWeek}} </p>

              @endforeach
              <hr>
          @endforeach

      </div>
  </div>
@endsection


