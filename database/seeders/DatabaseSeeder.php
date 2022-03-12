<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Quotes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Quotes::factory(6)->create();
    }
}
