<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Uplink>
 */
class UplinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'port' => $this->faker->randomDigit(),
            'date' => $this->faker->date(),
            'payloads' => collect([
                'dBMin' => $this->faker->randomFloat(2, 0, 100),
                'dBMax' => $this->faker->randomFloat(2, 0, 100),
                'dBA' => $this->faker->randomFloat(2, 0, 100),
                'Arc'    => $this->faker->randomFloat(2, 0, 100),
                'battery' => $this->faker->randomFloat(2, 0, 100),
                'status' => $this->faker->randomElements(['Normal','Waspada','Kritis'])
            ]),
            'device_id' => $this->faker->randomDigit(),
        ];
    }
}
