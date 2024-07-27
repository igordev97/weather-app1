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

        $cityName = $this->command->getOutput()->ask('Unesite ime grada');

        if($cityName === null){
            $this->command->getOutput()->error("Niste uneli ime grada");
            return;
        }
        $city = CityModel::where('name', $cityName)->first();
        if($city instanceof CityModel){
            $this->command->getOutput()->error("Grad sa tim imenom vec postoji");
            return;
        }
        $min = $this->command->getOutput()->ask('Unesite minimalnu temperaturu',10);
        $max = $this->command->getOutput()->ask('Unesite maksimalnu temperaturu',30);
        $weahter = $this->command->getOutput()->ask('Unesite vreme napolju.Izaberite od ova ponudjena resenja:sunny,show,rain,storm,cloudy','sunny');


       $date = date("Y-m-d");
        CityModel::create([
            'name' => $cityName,
            'min' => $min,
            'max' => $max,
            'weather' => $weahter,
            'date' => $date,
        ]);


        $this->command->getOutput()->info("Uspesno ste dodali novi grad u bazi");







    }
}
