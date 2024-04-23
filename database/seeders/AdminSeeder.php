<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Add this line to import the User model

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'Admin Name',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Use bcrypt to hash the password
            'role' => 'admin', // Assuming you have a 'role' field in your users table
        ]);
    }
}
