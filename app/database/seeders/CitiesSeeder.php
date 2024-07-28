<?php

namespace Database\Seeders;

use App\Models\CitiesModel;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        $faker = Factory::create('sr_RS');
        $this->command->getOutput()->progressStart(10);
        for ($i = 0; $i < 100; $i++) {
            $city = $faker->city;
            $result = CitiesModel::where('name', $city)->first();

            if($result instanceof CitiesModel){
//                $this->command->getOutput()->error('Grad vec postoji');
                continue;
            }
            CitiesModel::create([
                'name' => $city,
            ]);
            $this->command->getOutput()->progressAdvance(1);
        }
        $this->command->getOutput()->progressFinish();
        $this->command->getOutput()->info('Done');
    }
}
