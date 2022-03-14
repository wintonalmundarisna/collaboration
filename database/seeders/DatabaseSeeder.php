<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Quotes;
use App\Models\Quottime;
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
        User::factory(10)->create();
        Quottime::factory(10)->create();
    }
}
