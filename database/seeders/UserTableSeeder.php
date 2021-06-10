<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name'=>'Ethan Hunt',
        //     'email'=>'ethan@gmail.com',
        //     'password'=>Hash::make('aaaaaaaa'),
        //      'description=>"The problem with most About Us pages is that they’re an afterthought—a link buried at the bottom of the page that leads to a few hastily written paragraphs about a company. What an About Us page should be is a goal-oriented sales page, one that focuses on highlighting the biggest selling points of your story and brand, making a strong first impression on curious customers"
        // ]);
    }
}
