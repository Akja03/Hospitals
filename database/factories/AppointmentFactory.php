<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'hospital_id' => Hospital::factory(),
            'date' => $faker->dateTimeBetween('+1 week', '+2 month'), 
            'time' => $faker->time('H:i:s'),
            'description' => $faker->sentence,
        ];
    }
}
