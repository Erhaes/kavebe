<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('certificates')->insert([
            [
                'lembaga' => 'BAN-PT',
                'gambar' => 'banpt.png',
                'file' => 'banpt.pdf',
                'lab_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lembaga' => 'IABEE',
                'gambar' => 'Sertifikat-IABEE-Teknik-Sipil-FT_2022.jpeg',
                'file' => 'Sertifikat-IABEE-Teknik-Sipil-FT_2022.jpeg',
                'lab_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lembaga' => 'LAM Teknik PII',
                'gambar' => 'sert_penyet_2023_PYT237206123.pdf.jpg',
                'file' => 'sert_penyet_2023_PYT237206123.pdf',
                'lab_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}
