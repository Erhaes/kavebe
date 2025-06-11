<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testings')->insert([
            // LT - Laboratorium Transportasi (ID: 1)
            [
                'nama_testing' => 'Uji Ekstraksi Aspal',
                'keterangan' => '<p>Uji ekstraksi aspal adalah proses pemisahan aspal dari campuran perkerasan jalan atau bahan lain yang mengandung aspal menggunakan pelarut, untuk menentukan kadar aspal yang ada.</p>',
                'sampel' => '2', 'satuan' => 'Sampel', 'harga' => 250000, 'catatan' => 'Minimal 2 sampel',
                'facility_id' => 1, 'equipment_id' => 1,
            ],
            [
                'nama_testing' => 'Uji Berat Jenis Core Drill Aspal',
                'keterangan' => '<p>Berat jenis aspal merupakan hasil perbandingan antara berat aspal atau ter terhadap berat air suling dengajn isi yang sama pada suhu tertentu. Metode ini dilakukan untuk menentukan berat jenis atau kepadatan perkerasan aspal di lapangan</p>',
                'sampel' => '3', 'satuan' => 'Sampel', 'harga' => 100000, 'catatan' => 'Minimal 3 sampel',
                'facility_id' => 1, 'equipment_id' => 2,
            ],
            [
                'nama_testing' => 'Core Drill Aspal',
                'keterangan' => '<p>Core drill aspal adalah metode pengambilan sampel inti (core sampling) dari lapisan aspal dengan menggunakan mesin bor</p>',
                'sampel' => '5', 'satuan' => 'Titik', 'harga' => 200000, 'catatan' => 'Minimal 5 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 1, 'equipment_id' => 3,
            ],
            [
                'nama_testing' => 'Penetrasi Aspal',
                'keterangan' => '<p>Uji penetrasi aspal adalah metode untuk mengukur seberapa jauh jarum standar dapat menembus sampel aspal pada kondisi standar, seperti suhu 25°C, beban 50/100 gram, dan waktu 5 detik. Hasilnya, disebut nilai penetrasi, menunjukkan kekerasan aspal.</p>',
                'sampel' => '2', 'satuan' => 'Sampel', 'harga' => 250000, 'catatan' => 'Minimal 2 sampel',
                'facility_id' => 1, 'equipment_id' => 4,
            ],
            [
                'nama_testing' => 'Mix Design Laston',
                'keterangan' => '<p>Mix Design Laston adalah proses merancang dan menentukan proporsi atau perbandingan bahan-bahan dalam campuran aspal beton (Laston) yang akan digunakan pada konstruksi jalan, dengan tujuan untuk mencapai kualitas dan performa yang diinginkan. Mix Design ini melibatkan pemilihan material (agregat kasar, agregat halus, filler, dan aspal) serta penentuan proporsi masing-masing bahan tersebut. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 4500000, 'catatan' => '',
                'facility_id' => 1, 'equipment_id' => 5,
            ],
            [
                'nama_testing' => 'Mix Design Latasir',
                'keterangan' => '<p>Mix Design Latasir adalah proses menentukan perbandingan atau komposisi bahan-bahan yang akan digunakan dalam pembuatan lapis tipis aspal pasir (Latasir). Latasir adalah lapisan permukaan jalan yang terbuat dari campuran aspal dan pasir, yang biasanya dicampur dan dipanaskan secara bersamaan di lapangan. Tujuan Mix Design Latasir adalah untuk memastikan bahwa campuran tersebut memiliki kualitas dan kinerja yang optimal sesuai dengan kebutuhan jalan yang akan dibuat.</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 2500000, 'catatan' => '',
                'facility_id' => 1, 'equipment_id' => 5,
            ],
            [
                'nama_testing' => 'Mix Design LPA',
                'keterangan' => '<p>Mix Design LPA (Lapis Pondasi Agregat) adalah proses merancang campuran material untuk pondasi jalan yang menggunakan agregat (batu, kerikil, pasir) dengan berbagai fraksi. Tujuan utama adalah memastikan pondasi memiliki kekuatan dan stabilitas yang cukup untuk menahan beban lalu lintas.</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 3500000, 'catatan' => '',
                'facility_id' => 1, 'equipment_id' => 5,
            ],
            [
                'nama_testing' => 'Uji Marshall',
                'keterangan' => '<p>Uji Marshall Aspal adalah metode standar untuk mengukur karakteristik fisik dan mekanik campuran aspal, seperti stabilitas dan kelelehan (flow). Uji ini digunakan untuk menentukan kualitas campuran aspal yang akan digunakan dalam konstruksi jalan, dengan mengukur kemampuan campuran untuk menahan beban dan deformasi. </p>',
                'sampel' => '2', 'satuan' => 'Sampel', 'harga' => 250000, 'catatan' => 'Minimal 2 sampel',
                'facility_id' => 1, 'equipment_id' => 6,
            ],

            // LH - Laboratorium Hidro (ID: 2)
            [
                'nama_testing' => 'Pengukuran Debit Saluran',
                'keterangan' => '<p>Pengukuran debit aliran air pada saluran/drainase. Ukuran debit air perlu diketahui sebagai dasar dalam analisis - analisis selanjutnya, terutama dalam analisis debit andalan, debit banjir, dan atau kepentingan analisis kualitas air.</p>',
                'sampel' => '3', 'satuan' => 'Titik', 'harga' => 300000, 'catatan' => 'Minimal 3 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 2, 'equipment_id' => 7,
            ],
            [
                'nama_testing' => 'Pengukuran Bathimetri',
                'keterangan' => '<p>Pengukuran batimetri adalah proses pengukuran kedalaman dan pemetaan topografi dasar perairan (laut, sungai, dan danau). Pengukuran ini menggunakan metode akustik seperti echosounder untuk menentukan kedalaman dan membuat peta kontur dasar laut. </p>',
                'sampel' => '1', 'satuan' => 'Ha', 'harga' => 1500000, 'catatan' => 'Minimal 1 Ha (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 2, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Pengukuran Sedimen Layang',
                'keterangan' => '<p>Pengukuran sedimen layang (suspended sediment) melibatkan pengambilan sampel air yang mengandung sedimen, kemudian analisis laboratorium untuk menentukan konsentrasi dan ukuran partikel sedimen. Proses ini penting untuk memahami transportasi sedimen di sungai dan saluran air lainnya, serta untuk mengevaluasi kualitas air dan dampak sedimentasi. </p>',
                'sampel' => '3', 'satuan' => 'Titik', 'harga' => 300000, 'catatan' => 'Minimal 3 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 2, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Pengukuran Sedimen Dasar',
                'keterangan' => '<p>Pengukuran sedimen dasar (bed load) adalah proses mengukur jumlah dan jenis sedimen yang bergerak di sepanjang dasar sungai atau saluran air. Metode ini penting untuk memahami dinamika sungai dan pengaruhnya terhadap lingkungan. Pengukuran dapat dilakukan secara langsung dengan mengambil sampel langsung dari sungai atau secara tidak langsung dengan menggunakan model hidrologi atau perhitungan berdasarkan faktor-faktor seperti debit aliran dan ukuran partikel sedimen. </p>',
                'sampel' => '3', 'satuan' => 'Titik', 'harga' => 300000, 'catatan' => 'Minimal 3 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 2, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Kualitas Air Pengecoran',
                'keterangan' => '<p>Uji kualitas air dalam pengecoran penting untuk memastikan mutu beton yang baik. Air yang digunakan harus bersih, tidak mengandung bahan organik, bahan kimia berbahaya (seperti besi, sulfat, dan klorida), serta tidak mengandung minyak. Uji kualitas air ini sering dilakukan untuk memastikan air tidak mengandung zat yang dapat merusak atau mengurangi kekuatan beton. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 2, 'equipment_id' => null,
            ],

            // LSBB - Laboratorium Struktur & Bahan Bangunan (ID: 3)
            [
                'nama_testing' => 'Uji Tekan Material (Alat Analog)',
                'keterangan' => '<p>Uji tekan material menggunakan alat analog adalah metode pengujian destruktif yang digunakan untuk menentukan seberapa kuat suatu material saat diberikan tekanan yang terus meningkat. Alat analog dalam konteks ini adalah alat uji tekan manual, bukan alat digital atau otomatis. Pengujian ini dilakukan dengan menempatkan spesimen material di antara dua pelat, dan kemudian pelat atas ditekan dengan gaya yang bertambah secara bertahap hingga material mengalami kegagalan atau patah.</p>',
                'sampel' => '2', 'satuan' => 'Sampel', 'harga' => 40000, 'catatan' => 'Minimal 2 sampel (belum termasuk biaya caping)',
                'facility_id' => 3, 'equipment_id' => 8,
            ],
            [
                'nama_testing' => 'Uji Tarik Baja',
                'keterangan' => '<p>Uji tarik baja adalah metode pengujian untuk menentukan kekuatan tarik suatu material baja. Uji ini dilakukan dengan memberikan gaya tarik yang sesumbu pada spesimen baja hingga patah, lalu diukur nilai tegangan dan regangan yang terjadi.</p>',
                'sampel' => '2', 'satuan' => 'Sampel', 'harga' => 175000, 'catatan' => 'Minimal 2 sampel (belum termasuk biaya bubut dan las)',
                'facility_id' => 3, 'equipment_id' => 9,
            ],
            [
                'nama_testing' => 'Scan Rebar Beton',
                'keterangan' => '<p>Scan Rebar Beton atau Rebar Scanning adalah metode uji tanpa rusak (non-destructive testing) yang digunakan untuk mendeteksi dan menganalisa kondisi tulangan baja (rebar) yang berada di dalam beton. Alat ini memungkinkan pengukuran tebal selimut beton, jarak antar tulangan, dan diameter tulangan tanpa perlu membongkar atau merusak struktur beton.</p>',
                'sampel' => '4', 'satuan' => 'Titik', 'harga' => 250000, 'catatan' => 'Minimal 4 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 3, 'equipment_id' => 10,
            ],
            [
                'nama_testing' => 'Berat Jenis Kerikil',
                'keterangan' => '<p>Uji berat jenis kerikil adalah pengujian untuk menentukan rasio massa padat kerikil terhadap massa air yang sama volumenya dan suhu yang sama. Uji ini penting untuk mengetahui karakteristik fisik kerikil yang digunakan dalam konstruksi, seperti beton, karena berat jenis mempengaruhi sifat-sifat beton lainnya seperti kekuatan dan kepadatan. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 100000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 11,
            ],
            [
                'nama_testing' => 'Berat Jenis Pasir',
                'keterangan' => '<p>Uji berat jenis pasir adalah proses untuk menentukan perbandingan massa pasir terhadap massa air pada volume yang sama. Ini digunakan untuk mengukur densitas pasir dan membantu dalam perhitungan takaran beton, desain struktur, dan berbagai aplikasi konstruksi lainnya.</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 100000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 12,
            ],
            [
                'nama_testing' => 'Uji Gradasi Kerikil',
                'keterangan' => '<p>Uji gradasi kerikil, atau uji saringan, adalah metode untuk menentukan distribusi ukuran butiran (grading) dalam campuran kerikil. Uji ini penting karena gradasi kerikil berpengaruh pada karakteristik campuran agregat, seperti kepadatan, porositas, dan workabilitas.</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 13,
            ],
            [
                'nama_testing' => 'Uji Gradasi Pasir',
                'keterangan' => '<p>Uji gradasi pasir adalah proses menentukan distribusi ukuran butir pasir menggunakan saringan dengan lubang-lubang berukuran berbeda. Tujuan utama pengujian ini adalah untuk mengetahui karakteristik pasir dan memastikan bahwa ukuran butir pasir berada dalam rentang yang sesuai untuk tujuan penggunaannya, misalnya dalam pembuatan beton. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 13,
            ],
            [
                'nama_testing' => 'Uji Kandungan Lumpur Agregat',
                'keterangan' => '<p>Uji kandungan lumpur agregat bertujuan untuk menentukan persentase lumpur yang lolos saringan nomor 200 (0,075 mm) dalam agregat halus (pasir) atau agregat kasar (split). Pengujian ini penting karena kandungan lumpur yang tinggi dapat menurunkan kualitas dan kekuatan beton. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 150000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Abrasi',
                'keterangan' => '<p>PenguUji abrasi adalah pengujian untuk menentukan ketahanan suatu bahan terhadap keausan atau kerusakan akibat gesekan atau abrasi. Uji ini sering digunakan untuk mengevaluasi kualitas bahan seperti agregat dalam konstruksi</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 250000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 14,
            ],
            [
                'nama_testing' => 'Uji Absorbsi Beton',
                'keterangan' => '<p>Uji absorbsi beton adalah pengujian untuk mengetahui kemampuan beton dalam menyerap air atau cairan melalui pori-pori yang ada di dalamnya. Uji ini penting untuk mengevaluasi kualitas dan daya tahan beton, karena penyerapan air yang berlebihan dapat menyebabkan kerusakan struktural seiring waktu. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Tarik Belah Beton',
                'keterangan' => '<p>Uji tarik belah beton adalah metode untuk mengukur kekuatan tarik beton secara tidak langsung dengan cara membelah benda uji silinder dengan gaya tarik yang diterapkan secara tegak lurus pada sumbu longitudinalnya. Uji ini digunakan untuk mengevaluasi ketahanan beton terhadap tegangan tarik yang cenderung menyebabkan retak atau pecah.</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Lentur Beton Polos',
                'keterangan' => '<p>Uji lentur beton polos adalah pengujian untuk menentukan kemampuan beton polos (tanpa tulangan) untuk menahan gaya lentur, yang terjadi saat balok beton dipasangi beban di atas dua perletakan. Pengujian ini bertujuan untuk mengetahui nilai beban maksimum yang bisa ditahan sebelum balok mengalami keretakan atau patah.</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 15,
            ],
            [
                'nama_testing' => 'Uji Lentur Beton Bertulang, Kayu, Besi, Lainnya',
                'keterangan' => '<p>Uji lentur digunakan untuk mengukur kemampuan suatu material, seperti beton bertulang, kayu, atau besi, untuk menahan beban atau gaya yang diberikan secara tegak lurus terhadap sumbunya sampai material tersebut mengalami patah atau runtuh.</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 250000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 16,
            ],
            [
                'nama_testing' => 'Mix Design Beton',
                'keterangan' => '<p>Mix design beton adalah proses merancang campuran bahan-bahan beton untuk mencapai kualitas dan karakteristik yang diinginkan, seperti kekuatan, kemudahan kerja, dan ketahanan. Proses ini melibatkan penentuan proporsi yang tepat dari semen, air, agregat halus (pasir), dan agregat kasar (split/batu pecah).</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 1500000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 17,
            ],
            [
                'nama_testing' => 'Uji Tekan Material (Alat Digital)',
                'keterangan' => '<p>Uji tekan material menggunakan alat digital adalah proses pengukuran kekuatan material terhadap tekanan atau beban kompresi. Alat-alat digital seperti Compression Testing Machine (CTM) dan Digital Concrete Test Hammer digunakan untuk memberikan gaya tekan secara otomatis dan akurat, serta mencatat data seperti beban dan waktu dengan sistem closed loop. Proses ini membantu menentukan kekuatan tekan maksimum dan modulus kompresi material, yang penting dalam evaluasi kualitas dan kinerja material dalam berbagai aplikasi.</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 150000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 18,
            ],
            [
                'nama_testing' => 'Berat Volume Material',
                'keterangan' => '<p>Berat volumetrik atau berat volume material adalah pengukuran berat barang berdasarkan dimensinya (panjang, lebar, tinggi) dan bukan berat sebenarnya. Ini sering digunakan oleh perusahaan pengiriman untuk menghitung biaya pengiriman, terutama untuk barang-barang besar atau ringan yang memakan banyak ruang.</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 150000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Core Drill Beton',
                'keterangan' => '<p>Core drilling beton adalah proses pengeboran yang digunakan untuk mengambil sampel inti (core) dari beton, yang biasanya dilakukan untuk uji kualitas, kekuatan, dan kepadatan beton. Sampel inti yang diambil kemudian diuji di laboratorium untuk mengetahui kekuatannya.</p>',
                'sampel' => '5', 'satuan' => 'Titik', 'harga' => 250000, 'catatan' => 'Minimal 5 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 3, 'equipment_id' => 3,
            ],
            [
                'nama_testing' => 'Uji Kekekalan Agregat',
                'keterangan' => '<p>Uji kekekalan agregat adalah pengujian untuk menentukan kemampuan agregat (bahan seperti pasir dan batu pecah) untuk mempertahankan kekokohan dan tidak mengalami kerusakan atau degradasi yang signifikan akibat pengaruh lingkungan, seperti perubahan suhu, pembekuan, atau eksposur terhadap air. Pengujian ini penting untuk memastikan kualitas agregat yang digunakan dalam konstruksi, terutama beton. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 250000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Kepipihan Agregat',
                'keterangan' => '<p>Uji kepipihan agregat adalah metode untuk menentukan persentase agregat yang berbentuk pipih (flaky) dalam campuran agregat. Agregat pipih memiliki ketebalan kurang dari 0,6 kali ukuran nominalnya. Uji ini penting untuk memastikan kualitas agregat yang digunakan dalam konstruksi, karena agregat pipih dapat mempengaruhi kekuatan dan daya tahan beton atau campuran aspal. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Berat Jenis Besi',
                'keterangan' => '<p>Uji berat jenis besi adalah pengukuran massa besi per satuan volume, biasanya dinyatakan dalam kilogram per meter kubik (kg/m³). Berat jenis besi standar adalah sekitar 7850 kg/m³. Uji ini digunakan untuk menentukan berat total besi beton dalam sebuah struktur atau untuk keperluan perhitungan lainnya yang membutuhkan informasi berat jenis. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 3, 'equipment_id' => 19,
            ],
            [
                'nama_testing' => 'Hammer Test',
                'keterangan' => '<p>Hammer test adalah metode pengujian non-destruktif yang digunakan untuk mengevaluasi kekuatan dan mutu beton dengan cara memberikan beban tumbukan (impact) pada permukaan beton. Alat yang digunakan dalam hammer test disebut rebound hammer atau concrete test hammer, dan juga dikenal dengan nama Schmidt Hammer atau Swiss Hammer. Metode ini sangat praktis dan cepat karena dapat digunakan untuk memeriksa mutu beton pada struktur yang sudah jadi, tanpa merusak beton. </p>',
                'sampel' => '10', 'satuan' => 'Titik', 'harga' => 100000, 'catatan' => 'Minimal 10 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 3, 'equipment_id' => 20,
            ],

            // LMT - Laboratorium Mekanika Tanah (ID: 4)
            [
                'nama_testing' => 'Uji Sondir',
                'keterangan' => '<p>Uji sondir, juga dikenal sebagai uji penetrasi konus atau Cone Penetration Test (CPT), adalah metode pengujian tanah lapangan yang digunakan untuk mengetahui karakteristik tanah, khususnya daya dukung dan kedalaman lapisan tanah keras. Uji ini dilakukan dengan memasukkan konus ke dalam tanah dan mengukur resistansi yang ditimbulkan.</p>',
                'sampel' => '2', 'satuan' => 'Titik', 'harga' => 850000, 'catatan' => 'Minimal 2 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 4, 'equipment_id' => 21,
            ],
            [
                'nama_testing' => 'Uji Bor Tangan',
                'keterangan' => '<p>Uji bor tangan adalah metode pengambilan sampel tanah atau batuan dengan menggunakan bor tangan untuk mengeksplorasi lapisan tanah atau batuan di lokasi proyek konstruksi. Tujuan utamanya adalah untuk mendapatkan sampel tanah atau batuan yang dapat mewakili kondisi lapisan tanah atau batuan di lokasi proyek. </p>',
                'sampel' => '3', 'satuan' => 'Titik', 'harga' => 500000, 'catatan' => 'Minimal 3 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 4, 'equipment_id' => 22,
            ],
            [
                'nama_testing' => 'Uji Kadar Air Tanah',
                'keterangan' => '<p>Uji kadar air tanah adalah proses untuk menentukan jumlah air yang terkandung dalam tanah, biasanya diukur dalam persentase berat atau volumetrik. Proses ini penting untuk berbagai aplikasi, termasuk pertanian, teknik sipil, dan studi lingkungan. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 150000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Berat Jenis Tanah',
                'keterangan' => '<p>Uji berat jenis tanah (specific gravity test) adalah metode untuk menentukan perbandingan antara berat butir tanah dengan berat air yang memiliki volume sama pada suhu tertentu. Nilai berat jenis tanah (Gs) biasanya berkisar antara 2.6 hingga 2.8, dengan nilai rata-rata sekitar 2,65. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 150000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Gradasi Tanah',
                'keterangan' => '<p>Uji gradasi tanah adalah proses penentuan distribusi ukuran butiran dalam sampel tanah. Hal ini dilakukan untuk mengetahui proporsi masing-masing ukuran butiran (misalnya, kerikil, pasir, debu, dan lempung) dalam tanah. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => 13,
            ],
            [
                'nama_testing' => 'Uji Batas Cair dan Batas Plastis Tanah',
                'keterangan' => '<p>Uji batas cair (liquid limit) dan batas plastis (plastic limit) pada tanah adalah metode untuk menentukan kadar air pada tanah pada batas antara keadaan cair dan plastis (batas cair) serta antara keadaan plastis dan semi padat (batas plastis). Uji ini penting untuk menentukan sifat-sifat tanah, terutama tanah lempung, dan membantu dalam klasifikasi dan pemahaman perilaku tanah. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 150000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Geser Langsung Tanah',
                'keterangan' => '<p>Uji geser langsung (direct shear test) adalah metode laboratorium untuk mengukur kekuatan geser tanah. Uji ini melibatkan pemberian tegangan normal dan gaya geser pada sampel tanah untuk menentukan parameter seperti kohesi dan sudut geser dalam. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 200000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => 23,
            ],
            [
                'nama_testing' => 'Uji Konsolidasi Tanah',
                'keterangan' => '<p>Uji konsolidasi tanah adalah pengujian yang bertujuan untuk menentukan bagaimana tanah akan mengendap atau berkonsolidasi di bawah beban. Pengujian ini sangat penting dalam rekayasa sipil karena memberikan informasi tentang perubahan volume tanah akibat pembebanan. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 300000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Proctor',
                'keterangan' => '<p>Uji Proctor adalah metode laboratorium untuk menentukan karakteristik pemadatan tanah, khususnya untuk menentukan kadar air optimal di mana tanah dapat mencapai kepadatan kering maksimumnya. Uji ini penting untuk menentukan seberapa efisien tanah dapat dipadatkan di lapangan menggunakan peralatan konstruksi. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 350000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji CBR Laboratorium (unsoaked)',
                'keterangan' => '<p>Uji CBR (California Bearing Ratio) laboratorium unsoaked adalah metode untuk mengukur kekuatan tanah atau bahan lain dalam kondisi tidak direndam air. Uji ini digunakan untuk menentukan daya dukung tanah dan membantu dalam perencanaan tebal perkerasan jalan. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 150000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => 24,
            ],
            [
                'nama_testing' => 'Uji CBR Laboratorium (soaked)',
                'keterangan' => '<p>Uji CBR (California Bearing Ratio) laboratorium dengan spesimen yang direndam (soaked) adalah metode untuk mengukur daya dukung tanah dalam kondisi basah, yang penting untuk desain perkerasan jalan. Proses ini melibatkan pemadatan spesimen tanah di laboratorium, kemudian direndam dalam air, dan diuji dengan penetrasi untuk menentukan nilai CBR. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 250000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => 24,
            ],
            [
                'nama_testing' => 'Uji Sand Cone (lapangan)',
                'keterangan' => '<p>Uji Sand Cone adalah metode pengujian kepadatan tanah di lapangan yang menggunakan pasir sebagai media untuk menentukan volume dan berat jenis tanah. Metode ini sering digunakan untuk menilai kepadatan tanah setelah pemadatan, misalnya pada konstruksi jalan atau landasan pacu. </p>',
                'sampel' => '10', 'satuan' => 'Titik', 'harga' => 250000, 'catatan' => 'Minimal 10 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 4, 'equipment_id' => 25,
            ],
            [
                'nama_testing' => 'Plate Bearing Test',
                'keterangan' => '<p>Plate bearing test adalah sebuah pengujian in-situ di lapangan yang digunakan untuk menentukan daya dukung tanah dan perkiraan penurunan tanah di bawahnya. Uji ini dilakukan dengan membebani tanah menggunakan pelat (bearing plate) dan mengamati penurunan tanah yang terjadi akibat beban tersebut. Hasilnya memberikan informasi penting untuk desain pondasi, terutama untuk pondasi dangkal. </p>',
                'sampel' => '5', 'satuan' => 'Titik', 'harga' => 600000, 'catatan' => 'Minimal 5 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 4, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'CBR Lapangan',
                'keterangan' => '<p>CBR Lapangan adalah pengujian California Bearing Ratio (CBR) yang dilakukan langsung di lokasi konstruksi atau lapangan. Pengujian ini bertujuan untuk mengukur kekuatan tanah dasar dan menentukan tebal perkerasan jalan yang dibutuhkan. Dalam CBR Lapangan, tanah diuji dalam kondisi alamiah, tanpa pemadatan.</p>',
                'sampel' => '5', 'satuan' => 'Titik', 'harga' => 350000, 'catatan' => 'Minimal 5 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 4, 'equipment_id' => 26,
            ],
            [
                'nama_testing' => 'Uji DCP',
                'keterangan' => '<p>Uji DCP (Dynamic Cone Penetrometer) adalah pengujian untuk menentukan kekuatan dan kepadatan tanah dasar jalan, yang hasilnya dapat digunakan untuk menentukan nilai CBR (California Bearing Ratio). Uji ini dilakukan dengan menumbuk kerucut logam ke dalam tanah dan mengukur seberapa jauh kerucut tersebut bisa menembus. </p>',
                'sampel' => '5', 'satuan' => 'Titik', 'harga' => 200000, 'catatan' => 'Minimal 5 titik (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 4, 'equipment_id' => 26,
            ],
            [
                'nama_testing' => 'Uji SPT',
                'keterangan' => '<p>Uji SPT (Standard Penetration Test) adalah metode uji penetrasi tanah yang digunakan untuk mengetahui sifat rekayasa geoteknik tanah, terutama untuk tanah tanpa kohesi, dan juga untuk pengambilan sampel tanah terganggu dengan teknik penumbukan. Uji ini dilakukan dengan memukul tabung belah (split spoon sampler) ke dalam tanah dan mencatat jumlah pukulan yang diperlukan untuk menembus kedalaman tertentu. </p>',
                'sampel' => '20', 'satuan' => 'Meter', 'harga' => 600000, 'catatan' => 'Minimal 20 m (belum termasuk biaya survei, transport & akomodasi)',
                'facility_id' => 4, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Triaxial UU',
                'keterangan' => '<p>Uji triaksial Unconsolidated-Undrained (UU) adalah jenis uji triaksial yang dilakukan tanpa mengkonsolidasikan sampel tanah dan tanpa membiarkan air pori mengalir keluar selama pengujian. Uji ini digunakan untuk menentukan parameter kekuatan geser tanah dalam kondisi tak terkonsolidasi dan tak terdrainase. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 250000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Triaxial CU',
                'keterangan' => '<p>Uji triaksial CU (Consolidated Undrained) adalah metode pengujian kekuatan geser tanah yang melibatkan konsolidasi sampel tanah di bawah tekanan, kemudian dilakukan pengujian tanpa drainase (undrained). Tujuan utama uji ini adalah untuk menentukan parameter kuat geser tanah, khususnya kohesi dan sudut gesekan internal, dalam kondisi tegangan efektif. </p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 500000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => null,
            ],
            [
                'nama_testing' => 'Uji Triaxial CD',
                'keterangan' => '<p>Pengujian triaxial Consolidated Drained</p>',
                'sampel' => '1', 'satuan' => 'Sampel', 'harga' => 500000, 'catatan' => '',
                'facility_id' => 4, 'equipment_id' => null,
            ],

            // LP - Laboratorium Pemetaan (ID: 5)
            [
                'nama_testing' => 'Pemetaan Kontur Tanah',
                'keterangan' => '<p>Pemetaan kontur tanah adalah proses visualisasi ketinggian dan bentuk permukaan bumi menggunakan garis-garis kontur. Garis-garis kontur ini menghubungkan titik-titik dengan ketinggian yang sama di atas permukaan bumi. Dengan kata lain, peta kontur memberikan gambaran tentang topografi suatu wilayah. </p>',
                'sampel' => '1', 'satuan' => 'Ha', 'harga' => 2000000, 'catatan' => 'Minimal 1 Ha (belum termasuk biaya survei, transportasi & akomodasi)',
                'facility_id' => 5, 'equipment_id' => 27,
            ],
            [
                'nama_testing' => 'Pemetaan Galian Timbunan',
                'keterangan' => '<p>Pemetaan galian timbunan adalah proses pengukuran dan pemetaan untuk menentukan volume tanah yang digali dan di timbunan. Hal ini penting untuk perencanaan dan pelaksanaan proyek konstruksi, seperti jalan, bangunan, atau pekerjaan tanah lainnya. Pemetaan ini biasanya dilakukan dengan menggunakan metode pengukuran yang meliputi pengukuran sipat datar, pengukuran profil melintang, dan penggunaan peta kontur. </p>',
                'sampel' => '0.5', 'satuan' => 'Ha', 'harga' => 4000000, 'catatan' => 'Minimal 0,5 Ha (belum termasuk biaya survei, transportasi & akomodasi)',
                'facility_id' => 5, 'equipment_id' => 27,
            ],
            [
                'nama_testing' => 'Pemetaan Trace Jalan',
                'keterangan' => '<p>Pemetaan trase jalan</p>',
                'sampel' => '0.5', 'satuan' => 'Ha', 'harga' => 5000000, 'catatan' => 'Minimal 0,5 Ha (belum termasuk biaya survei, transportasi & akomodasi)',
                'facility_id' => 5, 'equipment_id' => 27,
            ],
            [
                'nama_testing' => 'Pemetaan Saluran Drainase/Sungai lebar < 20 m',
                'keterangan' => '<p>Pemetaan saluran/sungai dengan lebar < 20 meter</p>',
                'sampel' => '1000', 'satuan' => 'm', 'harga' => 7500, 'catatan' => 'Minimal 1 km (belum termasuk biaya survei, transportasi & akomodasi)',
                'facility_id' => 5, 'equipment_id' => 27,
            ],
            [
                'nama_testing' => 'Pemetaan Saluran Drainase/Sungai lebar 20 - 50 m',
                'keterangan' => '<p>Pemetaan saluran/sungai dengan lebar 20-50 meter</p>',
                'sampel' => '1000', 'satuan' => 'm', 'harga' => 10000, 'catatan' => 'Minimal 1 km (belum termasuk biaya survei, transportasi & akomodasi)',
                'facility_id' => 5, 'equipment_id' => 27,
            ],
            [
                'nama_testing' => 'Pemetaan Saluran Drainase/Sungai lebar 50 - 100 m',
                'keterangan' => '<p>Pemetaan saluran/sungai dengan lebar 50-100 meter</p>',
                'sampel' => '1000', 'satuan' => 'm', 'harga' => 15000, 'catatan' => 'Minimal 1 km (belum termasuk biaya survei, transportasi & akomodasi)',
                'facility_id' => 5, 'equipment_id' => 27,
            ],
            [
                'nama_testing' => 'Pemetaan Saluran Drainase/Sungai lebar 100 - 300 m',
                'keterangan' => '<p>Pemetaan saluran/sungai dengan lebar 100-300 meter</p>',
                'sampel' => '1000', 'satuan' => 'm', 'harga' => 20000, 'catatan' => 'Minimal 1 km (belum termasuk biaya survei, transportasi & akomodasi)',
                'facility_id' => 5, 'equipment_id' => 27,
            ],

        ]);
    }
}