<?php

namespace Database\Factories;

use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CharacterFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Character::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // Generate gender.
        $gender = $this->faker->randomElement([ 'male', 'female' ]);

        return [
            'gender' => $gender,
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->year('-30 years'),
            'job_name' => $this->faker->jobTitle,
        ];
    }

}
