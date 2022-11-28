<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        for($i=1;$i<=9;$i++) {
            DB::table('books')->insert([
                'publishers_id' => $faker->numberBetween(1, 3),
                'title' => 'Title '.$i,
                'author' => $faker->name,
                'year' => $faker->numberBetween(2019, 2022),
                'synopsis' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore odit sit, fugit sint cupiditate excepturi labore facere reiciendis debitis provident?',
                
                'image' => 'cover'.$i.'.png'
            ]);
        }
    }
}
