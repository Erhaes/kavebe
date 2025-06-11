<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IntroductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('introductions')->insert([
            [
                'pengantar' => '<p>Selamat datang di website resmi Laboratorium Teknik Sipil Universitas Jenderal Soedirman. Website ini hadir sebagai 
                wujud komitmen kami dalam menyediakan informasi yang transparan, akurat, dan mudah diakses terkait fasilitas, layanan, 
                serta kegiatan akademik dan penelitian yang berlangsung di laboratorium kami.</p>
                <p>Sebagai bagian penting dalam mendukung tridharma perguruan tinggi, laboratorium ini terus berinovasi dalam menyediakan 
                layanan praktikum, pengujian material, serta riset terapan di berbagai bidang teknik sipil. Melalui platform ini, kami 
                juga membuka peluang kolaborasi dengan mitra industri, lembaga pemerintah, dan masyarakat luas.</p>
                <p>Kami berharap kehadiran website ini dapat menjadi jembatan komunikasi yang efektif dan memberikan manfaat sebesar-besarnya 
                bagi seluruh pemangku kepentingan.</p>',
                'team_id' => 1, // Pastikan ada team dengan id 1 di tabel teams
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
