<?php

namespace Database\Seeders;

use App\Models\CityModel;
use App\Models\User;
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
        //

        $city = $this->command->getOutput()->ask('Enter City?');
        $min_temperature = $this->command->getOutput()->ask('Enter Min Temperature?');
        $max_temperature = $this->command->getOutput()->ask('Enter Max Temperature?');
        $date = date('Y-m-d');
        $weather = $this->command->getOutput()->ask('Enter Weather : sunny,snow,storm,rain,cloudy');
        $this->command->getOutput()->progressStart();
        $this->command->getOutput()->progressAdvance(1);
        CityModel::create([
            'name' => $city,
            'min' => $min_temperature,
            'max' => $max_temperature,
            'date' => $date,
            'weather' => $weather,

        ]);

        $this->command->getOutput()->progressFinish();



    }
}
