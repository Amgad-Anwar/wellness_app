<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AgeGroup>
 */
class AgeGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $from=$this->faker->numberBetween(1,15);
        $to=$this->faker->numberBetween($from,40);
        return [
            //
            'title'=>$this->faker->name,
            'description'=>$this->faker->text,
            'from'=>$from,
            'to'=>$to,
        ];
    }
}
