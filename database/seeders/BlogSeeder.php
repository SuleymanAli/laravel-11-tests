<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->sentence(6),
//                'slug' => Str::slug($faker->sentence(6)),
                'content' => $faker->paragraph(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
