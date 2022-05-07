<?php

namespace Database\Factories;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;

=======

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
>>>>>>> cc24638561287abba95aafde3484c10403a550e4
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'rating' => $this->faker->numberBetween(1,5),
            'title' => $this->faker->sentence(4),
            'body' => $this->faker->paragraph(),
            'part_id' => $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(1,10),
=======
            'title'=>$this->faker->name(6),
            'body'=>  Str::random(350),
            'rating'=>$this->faker->numberBetween(1,5),
            'part_id'=>$this->faker->numberBetween(1,10),
            'user_id'=>$this->faker->numberBetween(1,10),

>>>>>>> cc24638561287abba95aafde3484c10403a550e4
        ];
    }
}
