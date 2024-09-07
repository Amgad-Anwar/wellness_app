<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CPTCategory>
 */
class CPTCategoryFactory extends Factory
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
            'code'=>$this->faker->randomLetter,
            'title'=>$this->faker->name,
            'description'=>$this->faker->text,
        ];
    }
}
