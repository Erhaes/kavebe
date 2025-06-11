<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Pengumuman',
                'slug' => Str::slug('Pengumuman'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kegiatan Laboratorium',
                'slug' => Str::slug('Kegiatan Laboratorium'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Prestasi',
                'slug' => Str::slug('Prestasi'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penelitian',
                'slug' => Str::slug('Penelitian'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('news_categories')->insert($categories);
    }
}
