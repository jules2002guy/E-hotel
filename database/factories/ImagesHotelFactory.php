<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImagesHotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomImage'=>$this->faker->imageUrl($width = 640, $height = 480),
            'destinationPath'=>$this->faker->words(6,true),
            'hotel_id'=>$this->faker->numberBetween(1,6)

        ];
    }
}
