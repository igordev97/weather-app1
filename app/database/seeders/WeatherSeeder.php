<?php

namespace Database\Seeders;

use App\Models\CitiesModel;
use App\Models\CityModel;
use App\Models\ForcasterModel;
use App\Models\User;
use App\Models\WeatherModel;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = CitiesModel::all();

        foreach ($cities as $city) {
            $weather = WeatherModel::where('city_id',$city->id)->first();
            if($weather instanceof WeatherModel){
                continue;
            }
            WeatherModel::create([
                'city_id' => $city->id,
                'temperature'=>rand(10,40),
                'date' => Carbon::now()
            ]);
        }



    }
}
