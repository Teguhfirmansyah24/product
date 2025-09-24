<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Biodata;
use Illuminate\Support\Facades\DB;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            [
                'nama' => 'Teguh',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
            [
                'nama' => 'Marsha',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
            [
                'nama' => 'Dikri',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
            [
                'nama' => 'Reihan',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
            [
                'nama' => 'Rakha',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
            [
                'nama' => 'Alif',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
            [
                'nama' => 'Jihad',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
            [
                'nama' => 'Ilman',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
            [
                'nama' => 'Radietya',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
            [
                'nama' => 'Dhavin',
                'kelas' => '11 RPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'tempat_lahir' => 'Bandung',
            ],
        ]);
    }
}
