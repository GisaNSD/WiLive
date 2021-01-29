<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(50),
            'teacher' => $this->faker->text(20),
            'capacity' => $this->faker->numberBetween(10,20),
            'type' => $this->faker->text(20),
            'link' => $this->faker->text(20),
        ];
    }
}
