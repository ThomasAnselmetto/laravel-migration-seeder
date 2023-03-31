<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {
            $train = new Train;
            
            $train->company = $faker->asciify();

            $train->departure_station = $faker->asciify();
            $train->arrival_station = $faker->asciify();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->numerify("Treno-numero-###");
            $train->number_of_carriages = rand(2, 10);
            $train->on_time = $faker->asciify();
            $train->deleted = $faker->asciify();
            
            $train->save();
        }

    }
}