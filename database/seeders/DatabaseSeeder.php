<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Quottime;
use Illuminate\Database\Seeder;

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
        User::create([
            'nama' => 'Ryan Fakhroji',
            'email' => 'ryan@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'nama' => 'Sandi Winanto',
            'email' => 'sandi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();
        Quottime::factory(12)->create();
    }
}
