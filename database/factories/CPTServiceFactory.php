<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CPTService>
 */
class CPTServiceFactory extends Factory
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
            'cpt_service_code'=>$this->faker->countryCode(),
            'cpt_service_short_name'=>$this->faker->name,
            'cpt_service_long_name'=>$this->faker->name,
            'cpt_service_description'=>$this->faker->text,
        ];
    }
}
