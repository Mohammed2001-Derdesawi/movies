<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imagable=[
            // \App\Models\Part::class,
            // \App\Models\Actor::class,
            // \App\Models\User::class,
            \App\Models\Admin::class,

        ];

        return [
            'imageable_id'=>$this->faker->numberBetween(1,10),
            'imageable_type'=>$this->faker->randomElement($imagable),
            'path'=>$this->faker->imageUrl(300,400),


        ];
    }
}
