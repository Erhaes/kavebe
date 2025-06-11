<?php

namespace Database\Seeders;

use App\Models\User;
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

        $this->call(
            [
                UserSeeder::class,
                FacilitySeeder::class,
                EquipmentSeeder::class,
                CertificateSeeder::class,
                ContactSeeder::class,
                NewsCategorySeeder::class,
                PositionSeeder::class, // Tambahkan ini
                IntroductionSeeder::class, // Tambahkan ini
                // Tambahkan seeder lain yang sudah Anda buat atau akan buat di sini
            ]
            );
    }
}
