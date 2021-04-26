<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 15; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('mahasiswa')->insert([
                'Nim' => $faker->unique()->numberBetween(2041723001, 2041723029),
                'Nama' => $faker->name,
                'Kelas' => 'TI-2B',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => $faker->phoneNumber,
                'E-mail' => $faker->freeEmail,
                'Tgl_lahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
            ]);
        }
    }
}
