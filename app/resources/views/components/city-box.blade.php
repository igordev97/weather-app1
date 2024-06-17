<div class="city-card col-3">

        <div class="row d-flex justify-between">
            <div class="col-6 d-flex flex-column align-items-center">
                <img src="{{asset('/images/'.$city->weather.'.png')}}" alt="sunny" width="100px">

                <span>{{$city->weather}}</span>
            </div>
            <div class="col-6">
                <h4 class="text-right"><span>max {{$city->max}}<sup>o</sup></span> <span><h4>min {{$city->min}}<sup>o</sup></h4></span></h4>
                <h2>{{$time}}</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 d-flex flex-column align-middle">
                <h1 class="text-center">{{$city->name}}</h1>
                <h4 class="text-center">{{$day}}</h4>
                <p class="text-center">{{$city->date}}</p>
            </div>
        </div>

</div>
