<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Holiday;

class holidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i ++){
            $newHoliday = new Holiday();
            $newHoliday->country = $faker->country();
            $newHoliday->save();
        }
    }
}
