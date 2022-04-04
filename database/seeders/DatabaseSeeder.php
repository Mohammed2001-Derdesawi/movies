<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Admin::factory(10)->create();
         \App\Models\Category::factory(10)->create();
         \App\Models\Movie::factory(10)->create();
         \App\Models\Serie::factory(10)->create();
         \App\Models\Part::factory(10)->create();
         \App\Models\Video::factory(10)->create();
         \App\Models\Image::factory(10)->create();
    }
}
