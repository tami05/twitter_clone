<?php

namespace Database\Seeders;


use App\Models\Billing;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Billing::factory(10)->create();
         User::factory(10)->create();
         Tweet::factory(20)->create();

    }
}
