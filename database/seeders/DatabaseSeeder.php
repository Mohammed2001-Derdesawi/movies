<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Database\Factories\tagaableFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
         \App\Models\Comment::factory(20)->create();
         \App\Models\Like::factory(10)->create();
         \App\Models\Review::factory(10)->create();
         \App\Models\PopularQuestion::factory(10)->create();
         \App\Models\Review::factory(40)->create();
         \App\Models\Tag::factory(10)->create();
         $tagaable=[
            \App\Models\Movie::class,
            \App\Models\Serie::class,



        ];
        for($i=0;$i<10;$i++)
         DB::table('taggables')->insert(
            [
             'tag_id' =>rand(1,10),
             'taggable_type' =>$tagaable[rand(0,1)],
             'taggable_id' =>rand(1,10),

           ]
            );

            $admin=\App\Models\Admin::find(1);
        //    $role=Role::create(['name'=>'super admin','guard_name'=>'admin']);
        //    $admin->assignRole($role);




    }
}
