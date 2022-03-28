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
        User::create([
            'nama' => 'Winton Almundarisna',
            'email' => 'wintonalmundarisna@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(10)->create();
        Quottime::factory(20)->create();
    }
}
