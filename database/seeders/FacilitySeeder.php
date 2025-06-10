<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facilities')->insert([
            [
                'nama_lab' => 'Laboratorium Transportasi',
                'slug' => Str::slug('Laboratorium Transportasi'),
                'keterangan' => '<p>Laboratorium Transportasi Teknik Sipil adalah laboratorium yang fokus 
                pada kegiatan praktikum, penelitian, dan pengujian terkait dengan transportasi, jalan, dan 
                lalu lintas, yang merupakan bagian penting dari studi Teknik Sipil</p>',
                // 'gambar' => 'Lab. Transport.jpeg',
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lab' => 'Laboratorium Hidroteknik',
                'keterangan' => '<p>Laboratorium hidroteknik dalam teknik sipil adalah laboratorium yang berfokus pada studi dan 
                penelitian terkait dengan air, hidrologi, hidrolika, dan rekayasa keairan untuk mendukung perencanaan, konstruksi,
                dan pemeliharaan infrastruktur sipil yang berhubungan dengan air.</p>',
                // 'gambar' => 'Lab. Hidro.jpeg',
                'slug' => Str::slug('Laboratorium Hidroteknik'),
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lab' => 'Laboratorium Struktur dan Bahan Bangunan',
                'keterangan' => '<p>Laboratorium Struktur dan Bahan Bangunan dalam Teknik Sipil adalah fasilitas yang digunakan untuk 
                pengujian, penelitian, dan pembelajaran terkait perilaku, karakteristik, dan kinerja struktur serta bahan bangunan 
                seperti beton, baja, dan kayu. </p>',
                // 'gambar' => 'Lab. Struktur.jpeg',
                'slug' => Str::slug('Laboratorium Struktur dan Bahan Bangunan'),
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lab' => 'Laboratorium Mekanika Tanah',
                'keterangan' => '<p>Laboratorium Mekanika Tanah dalam teknik sipil adalah fasilitas yang digunakan untuk melakukan 
                pengujian dan penelitian terkait perilaku tanah, yang penting dalam perencanaan dan konstruksi infrastruktur 
                seperti jalan, bangunan, dan bendungan. </p>',
                // 'gambar' => 'Lab. Mektan.jpeg',
                'slug' => Str::slug('Laboratorium Mekanika Tanah'),
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lab' => 'Laboratorium Pemetaan',
                'keterangan' => '<p>Laboratorium pemetaan teknik sipil adalah laboratorium yang berfungsi untuk mendukung kegiatan 
                pendidikan dan penelitian di bidang survei, pemetaan, dan Geoinformatika (GIS) dalam lingkup teknik sipil, 
                yang mencakup kegiatan praktikum, penelitian tugas akhir, dan penelitian dosen. </p>',
                // 'gambar' => 'Transport.jpeg',
                'slug' => Str::slug('Laboratorium Pemetaan'),
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lab' => 'Ruang Administrasi',
                'keterangan' => '<p>Pendaftaran pengujian dan penelitian dilakukan pada ruang administrasi. Pengunjung juga
                bisa bertanya pada admin yang berjaga.</p>',
                // 'gambar' => 'Admin pendaftaran.jpg',
                'slug' => Str::slug('Ruang Administrasi'),
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lab' => 'Ruang Rapat',
                'keterangan' => '<p>Ruang rapat di Laboratorium Teknik Sipil Universitas Jenderal Soedirman dirancang sebagai pusat kolaborasi dan 
                komunikasi, menciptakan lingkungan kondusif untuk diskusi mendalam dan pertukaran ide antara para akademisi, peneliti, 
                dan mitra industri.</p>',
                // 'gambar' => 'Ruang Rapat.jpeg',
                'slug' => Str::slug('Ruang Rapat'),
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lab' => 'Lobby/Ruang Tunggu',
                'keterangan' => '<p>Lobby atau ruang tunggu di Laboratorium Teknik Sipil Universitas Jenderal Soedirman dirancang sebagai 
                area penerimaan tamu dan pengunjung.</p>',
                // 'gambar' => 'Loby ruang tunggu.jpeg',
                'slug' => Str::slug('Lobby Ruang Tunggu'),
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lab' => 'Ruang Kantor',
                'keterangan' => '<p>Ruang kantor di Laboratorium Teknik Sipil Universitas Jenderal Soedirman dirancang untuk menciptakan lingkungan kerja 
                yang efisien, produktif, dan mendukung pengembangan ide-ide inovatif. Fasilitas ini berdedikasi sebagai pusat aktivitas 
                administratif, perencanaan, dan koordinasi.</p>',
                // 'gambar' => 'Ruang Kantor.jpeg',
                'slug' => Str::slug('Ruang Kantor'),
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lab' => 'Ruang Workshop',
                'keterangan' => '<p>Ruang workshop di Laboratorium Teknik Sipil Universitas Jenderal Soedirman merupakan pusat kreativitas dan 
                eksperimen praktis yang menghubungkan teori dengan aplikasi nyata. Dirancang untuk mendukung proses perancangan, 
                pengembangan, dan pengujian prototipe, ruang ini menjadi wadah bagi inovasi dan kolaborasi antar peneliti, mahasiswa, 
                dan praktisi industri.</p>',
                // 'gambar' => 'Work Shop.jpeg',
                'slug' => Str::slug('Ruang Workshop'),
                'lab_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
