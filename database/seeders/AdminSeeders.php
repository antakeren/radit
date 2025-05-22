<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'username' => 'Admin',
        //     'email' => 'hinisterrivasa@gmail.com',
        //     'password' => Hash::make('NgapainMasuk'),
        //     'role' => 'admin',
        // ]);

        User::firstOrCreate([
            'username' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('NgapainMasuk'),
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
        ]);
        
    }
}
