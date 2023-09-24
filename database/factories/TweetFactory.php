<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tweet>
 */
class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 日本語のFakerを使用
        $faker = \Faker\Factory::create('ja_JP');

        return [
            'content' => $faker->realText(124),
            'user_id' => User::inRandomOrder()->first()->id,
            'created_at' => $faker->dateTimeThisYear(),
            'updated_at' => null,
        ];
    }
}
