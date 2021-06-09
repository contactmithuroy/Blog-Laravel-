<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1) as $index){
            DB::table('settings')->insert([
                'name'=>'BaroMon',
                'footer' => 'Copyright © 2021 Lavrodoc Production. All rights reserved.',
            ]);
        }
    }
}
