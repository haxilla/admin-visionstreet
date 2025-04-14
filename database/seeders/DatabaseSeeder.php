<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FullTestSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FullTestSeeder::class);
    }
}
