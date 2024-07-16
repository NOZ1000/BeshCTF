<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;
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

        for ($i = 1; $i < 15; $i++) {
            if ($i <= 8) {
                $is_active = true;
            } else {
                $is_active = false;
            }
            \App\Models\Task::create([
                'name' => 'Besh Task №' . $i,
                'description' => 'Description for Task ' . $i . fake()->sentences(3, true),
                'flag' => 'beshCTF{' . Str::random(10) . '}',
                'is_active' => $is_active,
            ]);
        }
    }
}
