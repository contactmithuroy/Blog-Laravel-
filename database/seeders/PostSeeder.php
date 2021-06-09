<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // foreach(range(1,15) as $index){
        //     DB::table('posts')->insert([
        //         'title'=> $faker->sentence(5),
        //         'slug'=>$faker->name,
        //         'image'=>$faker->imageUrl($width = 400, $height = 400) ,
        //         'description' => $faker->paragraph,
        //         'user_id'=>1,
        //         'category_id' =>1
        //     ]);
        // }
    }
}
 