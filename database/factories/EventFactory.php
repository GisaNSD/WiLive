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
            'id' => $this->id(),
            'title' => $this->faker->title,
            'capacity' => $this->faker->tinyinteger(),
            'techer' => now(),
            'description' => $this->faker->description,
            'image' => $this->faker->image(),
            'date' => $this->faker->timestamp(),
        ];
    }
}
