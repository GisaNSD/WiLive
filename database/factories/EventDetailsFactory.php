<?php

namespace Database\Factories;

use App\Models\EventDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventDetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EventDetails::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(25),
            'description' => $this->faker->text(50),
            'type' => $this->faker->text(20),
            'category' => $this->faker->text(25),
            'user_id' => $this->faker->numberBetween(1),
        ];
    }
}
