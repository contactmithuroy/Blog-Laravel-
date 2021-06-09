<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Faker\Factory as Faker;
// use Illuminate\Support\Str;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('settings')->insert([
                'name'=>'BaroMon',
                'copyright' => 'Copyright © 2021 Lavrodoc Production. All rights reserved.',
            ]);
    }
}
