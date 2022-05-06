<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class tagaableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tagaable=[
            \App\Models\Movie::class,
            \App\Models\Serie::class,

        ];

        return [
                DB::table('taggables')->insert(
                [
                 'name' => Str::random(5),
                 'tag_id' => $this->faker->numberBetween(1,10),
                 'taggable_type' => $this->faker->randomElement($tagaable),
                 'taggable_id' =>  $this->faker->numberBetween(1,10),

               ]
                ),
        ];
    }
}
