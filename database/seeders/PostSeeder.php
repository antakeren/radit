<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\posts;
use App\Models\User;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        posts::factory()->count(10)->create(
            // [
            //     'user_id' => User::where('role', 'admin')->first()->id,
            // ]
        );
        posts::factory(10)->create([
            'user_id' => User::where('role', 'admin')->first()->id,
        ]);
    }
}
