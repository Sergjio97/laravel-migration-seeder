<?php

use Illuminate\Database\Seeder;

use App\Holiday;

class holidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newHoliday = new Holiday();
        $newHoliday->country = 'Italia';
        $newHoliday->save();
    }
}
