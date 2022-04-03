<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Part>
 */
class PartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $paratable=[
            \App\Models\Movie::class,
            \App\Models\Serie::class,

        ];
        return [
            'description'=>$this->faker->name(15),
            'place_of_work'=>$this->faker->country(),
            'admin_id' => $this->faker->numberBetween(1,10),
             'partable_id'=>$this->faker->numberBetween(1,10),
             'partable_type'=>$this->faker->randomElement($paratable),



        ];
    }
}
