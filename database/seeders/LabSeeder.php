<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('labs')->insert([
            [
                'nama' => 'Laboratorium Teknik Sipil Universitas Jenderal Soedirman',
                'slug' => Str::slug('Laboratorium Teknik Sipil Universitas Jenderal Soedirman'),
                'cta' => 'Build Quality to Bring Dignity', // Menggunakan 'slogan' sebagai 'cta'
                'keterangan' => '<p>Laboratorium Teknik Sipil Unsoed berfungsi sebagai pusat pembelajaran praktis dan eksperimental yang tidak hanya mendukung kegiatan akademik tetapi juga penelitian dan pengabdian masyarakat. Fasilitas ini secara aktif dipergunakan oleh mahasiswa Fakultas Teknik Unsoed, khususnya dari Program Studi Teknik Sipil, untuk melaksanakan berbagai praktikum, tugas laboratorium, serta proyek-proyek riset yang berkaitan dengan bidang ketekniksipilan. Selain itu, laboratorium ini juga memberikan pelayanan teknis dan konsultasi bagi mitra eksternal, termasuk instansi pemerintah, perusahaan konstruksi, dan industri terkait, yang membutuhkan pengujian material, analisis struktur, atau solusi teknik sipil lainnya. Pelayanan mencakup dalam bidang Struktur dan Bahan Bangunan, Mekanika Tanah dan Hidraulika, Transportasi, Mekanika Keairan dan Teknik Lingkungan.</p>
                                <p>Dengan fasilitas yang memadai dan didukung oleh tenaga ahli serta dosen-dosen berpengalaman  Laboratorium Teknik Sipil Unsoed menjadi salah satu pusat unggulan dalam mendukung pengembangan ilmu pengetahuan dan teknologi di bidang teknik sipil, sekaligus menjadi mitra strategis bagi berbagai pemangku kepentingan di tingkat regional maupun nasional.</p>',
                // 'gambar' => 'labsipil.jpeg', // Akan ditangani oleh Spatie Media Library
                // 'video' => 'videolabsipil.mp4', // Akan ditangani oleh Spatie Media Library
                'visi' => '<p>Menjadi laboratorium Teknik Sipil yang bermutu dan maju untuk mendukung kegiatan akademik, penelitian dan industri konstruksi sehingga dapat berkontribusi bagi pembangunan bangsa dan negara.</p>',
                'misi' => '<ol>
                            <li>Memberikan pelayanan praktikum kepada mahasiswa</li>
                            <li>Memberikan pelayanan penelitian kepada dosen dan mahasiswa</li>
                            <li>Memberi pelayanan pengujian kepada kontraktor dan konsultan</li>
                           </ol>',
                'link_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126597.44423298838!2d109.15661668906247!3d-7.446421294082803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655986a5294e97%3A0x6ed179e2743fcd16!2sGedung%20Laboratorium%20Bersama%20FT%20UNSOED!5e0!3m2!1sid!2sid!4v1749603904671!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', // Ganti dengan link Google Maps yang sebenarnya
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
