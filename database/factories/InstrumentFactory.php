<?php

namespace Database\Factories;

use App\Models\Instrument;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstrumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instrument::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'model' => $this->faker->bothify('??-###'),
            'year' => $this->faker->numberBetween(1950, 2021),
            'type' => $this->faker->word,
            'price' => $this->faker->randomFloat(2,100,10000),
        ];
    }
}
