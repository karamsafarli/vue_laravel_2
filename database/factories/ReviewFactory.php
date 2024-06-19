<?php

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'review' => $this->faker->sentence,
            'rating' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeThisYear
        ];
    }
}

