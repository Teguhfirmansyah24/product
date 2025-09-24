<?php

namespace Database\Seeders;

// use App\Models\User;
use App\Models\industri;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Industri::create([
            'name' => "Bakso",
            'description' =>  "Bakso enak dan gurih",
            'price' => 15000,
            'stock' => 10,
        ]);

        $this->call(
            BiodataSeeder::class
        );
    }
}
