<?php

namespace Database\Factories;

use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender=['male', 'female'];
        $age=rand(1,100);
        return [
            'fname' => $this->faker->firstName(),
            'lname' => $this->faker->lastName(),
            'gender' =>$gender[random_int(0, 1)],
            'age' =>$age,
            'contact' =>$this->faker->e164PhoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('12345678'),
            'medicalhistory' =>$this->faker->name,
        ];
    }
}
