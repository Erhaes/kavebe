<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            [
                'nama' => 'Ir. Hery Awan Susanto., S.T.,M.T.',
                // 'gambar' => 'heri.jpg', // Kolom gambar tidak ada di tabel teams
                'position_id' => 1,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ir. Dani Nugroho Saputro., S.Pd.T., M.Eng.',
                // 'gambar' => 'dani.jpg',
                'position_id' => 1,
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Umigawati',
                // 'gambar' => 'umigawati.jpg',
                'position_id' => 2,
                'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ghiffara Hasna Royanisa',
                // 'gambar' => 'ghiffara.jpg',
                'position_id' => 2,
                'user_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ferdiono',
                // 'gambar' => 'ferdiono.jpg',
                'position_id' => 3,
                'user_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Wildan Agus Setiadi',
                // 'gambar' => 'wildan.jpg',
                'position_id' => 3,
                'user_id' => 7,
                'created_at' => now(),    
                'updated_at' => now(),
            ],
            [
                'nama' => 'M.T. Fajriyanto',
                // 'gambar' => 'fajri.jpg',
                'position_id' => 3,
                'user_id' => 8,
                'created_at' => now(),    
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kuswanto',
                // 'gambar' => 'kuswanto.jpg',
                'position_id' => 3,
                'user_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Amrizal Hafiz',
                // 'gambar' => 'amrizal.jpg',
                'position_id' => 3,
                'user_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Wiwit Laras Wiranto',
                // 'gambar' => 'wiwit.jpg',
                'position_id' => 3,
                'user_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Yulianto',
                // 'gambar' => 'yulianto.jpg',
                'position_id' => 3,
                'user_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Slamet',
                // 'gambar' => 'Slamet.jpg',
                'position_id' => 3,
                'user_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            ]);
    }
}
