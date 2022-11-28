<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class book_categorySeeder extends Seeder
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
            DB::table('book_category')->insert([
                'books_id' => $i,
                'categories_id' => $faker->numberBetween(1, 3)
            ]);
        }
    }
}
