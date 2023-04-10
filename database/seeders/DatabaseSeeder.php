<?php

namespace Database\Seeders;

use App\Models\Agama;
use App\Models\Kelamin;
use App\Models\Layanan;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\User;
use App\Models\Usia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),

        ]);
        //Pekerjaan
        Pekerjaan::create([
            'pekerjaan' => 'Nelayan/Petani/Peternak',

        ]);
        Pekerjaan::create([
            'pekerjaan' => 'PNS/TNI/POLRI',

        ]);
        Pekerjaan::create([
            'pekerjaan' => 'Karyawan Swasta',

        ]);
        Pekerjaan::create([
            'pekerjaan' => 'Pedagang/Wiraswasta',

        ]);
        Pekerjaan::create([
            'pekerjaan' => 'Guru/Dosen',

        ]);
        Pekerjaan::create([
            'pekerjaan' => 'Dokter/Bidan/Perawat',

        ]);
        Pekerjaan::create([
            'pekerjaan' => 'Pelajar/Mahasiswa',

        ]);
        Pekerjaan::create([
            'pekerjaan' => 'Lainnya',

        ]);
        //Agama
        Agama::create([
            'agama' => 'Islam',

        ]);
        Agama::create([
            'agama' => 'Kristen',

        ]);
        Agama::create([
            'agama' => 'Katolik',

        ]);
        Agama::create([
            'agama' => 'Hindu',

        ]);
        Agama::create([
            'agama' => 'Budha',

        ]);
        Agama::create([
            'agama' => 'Konghucu',

        ]);
        Agama::create([
            'agama' => 'Kepercayaan Terhadap Tuhan YME',

        ]);
        //Pendidikan
        Pendidikan::create([
            'pendidikan' => 'SD / Sederajat',

        ]);
        Pendidikan::create([
            'pendidikan' => 'SMP / Sederajat',

        ]);
        Pendidikan::create([
            'pendidikan' => 'SMA / Sederajat',

        ]);
        Pendidikan::create([
            'pendidikan' => 'D1 / D2',

        ]);
        Pendidikan::create([
            'pendidikan' => 'D3 / D4',

        ]);
        Pendidikan::create([
            'pendidikan' => 'S1',

        ]);
        Pendidikan::create([
            'pendidikan' => 'S2',

        ]);
        Pendidikan::create([
            'pendidikan' => 'S3',

        ]);
        //Kelamin
        Kelamin::create([
            'kelamin' => 'Laki-Laki',

        ]);
        Kelamin::create([
            'kelamin' => 'Perempuan',

        ]);
        //Layanan
        Layanan::create([
            'layanan' => 'Baru',

        ]);
        Layanan::create([
            'layanan' => 'Perpanjangan',

        ]);
        Layanan::create([
            'layanan' => 'Peningkatan',

        ]);
        Layanan::create([
            'layanan' => 'Penurunan',

        ]);
        Layanan::create([
            'layanan' => 'Hilang/Rusak',

        ]);
        Layanan::create([
            'layanan' => 'Habis Masuk Berlaku',

        ]);
        //Usia
        Usia::create([
            'usia' => '20 Tahun Kebawah',

        ]);
        Usia::create([
            'usia' => '21-30 Tahun',

        ]);
        Usia::create([
            'usia' => '31-40 Tahun',

        ]);
        Usia::create([
            'usia' => '41-50 Tahun',

        ]);
        Usia::create([
            'usia' => '50 Tahun Keatas',

        ]);
    }
}
