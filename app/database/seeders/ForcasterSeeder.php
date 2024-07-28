<?php

namespace Database\Seeders;

use App\Models\CitiesModel;
use App\Models\ForcasterModel;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForcasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create();
        $cities = CitiesModel::all();

        foreach ($cities as $city) {
            for($i=0;$i<5;$i++){
                $date = Carbon::now()->addDays(rand(1,30));
                ForcasterModel::create([
                    'city_id' => $city->id,
                    'temperature' => rand(10,30),
                    'date' =>$date,
                    'weather_type'=>ForcasterModel::WEATHER_TYPE[rand(0,4)],
                    'probability' => rand(0,100),
                    'dayWeek' =>Carbon::parse($date)->format('l')
                ]);
            }
        }
    }
}
