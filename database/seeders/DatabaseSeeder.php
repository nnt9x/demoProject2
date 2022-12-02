<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Thêm 1 tài khoản admin và 1 của khách.

        User::factory()->create([
           'name'=> 'Admin 1',
           'email' => 'admin@gmail.com',
           'password' => Hash::make('12345678'),
            'isAdmin' => true,
            'isActive' => true,
        ]);

        User::factory()->create([
            'name'=> 'User 1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => false,
            'isActive' => true,
        ]);
    }
}
