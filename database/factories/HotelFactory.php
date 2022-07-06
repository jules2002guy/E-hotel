<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->words(6,true),
            'description1'=>$this->faker->sentence($nbWords = 5, $variableNbWords = true),
            'description2'=>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'caracteristique'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'lieu'=>$this->faker->city(),
            'image'=>$this->faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker') 
        ];
    }
}
