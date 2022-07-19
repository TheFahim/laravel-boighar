<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RequestbookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          
             'booktitle'=>$this->faker->word(),
             'bookauthor'=>$this->faker->word(),
             'bookedition'=>$this->faker->word(),
             'bookquantity'=>$this->faker->randomDigitNot(2),
             'price'=>$this->faker->randomNumber(5, false),
             'mobile'=>$this->faker->e164PhoneNumber() ,
             'address'=>$this->faker->address(),
             'bookimage'=>$this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
