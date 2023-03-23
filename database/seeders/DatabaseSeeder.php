<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('12345'),
        ]);
        DB::table('data')->insert([
            [
                'id' => 1,
                'message'  => 'Text 1 ' . Str::random(50),
            ],
            [
                'id' => 2,
                'message'  => 'Text 2 ' . Str::random(50),
            ],
            [
                'id' => 3,
                'message'  => 'Text 3 ' . Str::random(50),
            ],
            [
                'id' => 4,
                'message'  => 'Text 4 ' . Str::random(50),
            ],
            [
                'id' => 5,
                'message'  => 'Text 5 ' . Str::random(50),
            ],
        ]);
    }
}
