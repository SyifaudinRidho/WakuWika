<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.id',
            'role' => 1,
            'password' => bcrypt('passwordadmin')
        ]);
    }
}
