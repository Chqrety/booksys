<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Menambahkan user pertama dengan role admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
        ]);

        // Memberikan role admin pada user pertama
        $admin->assignRole('admin');

        // Menambahkan 9 user lainnya
        for ($i = 1; $i <= 9; $i++) {
            User::create([
                'name' => $faker->name, // Menggunakan Faker untuk nama acak
                'email' => $faker->unique()->safeEmail, // Menggunakan Faker untuk email acak
                'password' => bcrypt('123'),
            ]);
        }
    }
}
