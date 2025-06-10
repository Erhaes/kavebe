<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'kontak' => '@laboratoriumsipilunsoed',
                'icon' => 'instagram-brands.svg',
                // 'jenis_kontak' => 'instagram',
                'sosial_media' => 1,
                'link' => 'https://instagram.com/laboratoriumsipilunsoed',
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kontak' => '0813 9313 3408',
                'icon' => 'whatsapp-brands.svg',
                // 'jenis_kontak' => 'whatsapp',
                'sosial_media' => 1,
                'link' => 'https://wa.me/6281393133408',
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kontak' => 'laboratoriumsipil.unsoed@gmail.com',
                'icon' => 'envelope-solid.svg',
                // 'jenis_kontak' => 'email',
                'sosial_media' => 0,
                'link' => 'mailto:laboratoriumsipil.unsoed@gmail.com',
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kontak' => 'GEDUNG D
                            FAKULTAS TEKNIK UNIVERSITAS JENDERAL SOEDIRMAN
                            JL. MAYJEND SUNGKONO KM. 5, KALIMANAH, PURBALINGGA',
                'icon' => 'map-location-dot-solid.svg',
                // 'jenis_kontak' => 'alamat',
                'sosial_media' => 0,
                'link' => null, // Atau bisa diisi link Google Maps jika ada
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
