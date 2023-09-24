<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Billing>
 */
class BillingFactory extends Factory
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
            'is_billing' => $faker->boolean(5) ? 1 : 0,
            'created_at' => $faker->dateTimeThisYear(),
            'updated_at' => $faker->dateTimeThisYear(),
        ];
    }
}
