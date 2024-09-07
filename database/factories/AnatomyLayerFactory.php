<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnatomyLayer>
 */
class AnatomyLayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->name,
            'layer_no'=>$this->faker->randomNumber(),
            'description'=>$this->faker->text,
        ];
    }
}
