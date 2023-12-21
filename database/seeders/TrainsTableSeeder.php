<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->address();
            $newTrain->arrival_station = $faker->address();
            $newTrain->departure_time = $faker->dateTimeBetween('now', '+10 hours');
            $newTrain->arrival_time = $faker->dateTimeBetween('+11 hours', '+20 hours');
            $newTrain->train_code = $faker->bothify('??-###');
            $newTrain->coaches = $faker->numberBetween(5,13);
            $newTrain->in_time = $faker->randomElement([true,false]);
            $newTrain->cancelled = $faker->randomElement([true,false]);
            $newTrain->save();

        }
    }

}
