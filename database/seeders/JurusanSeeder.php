<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        // Bersihkan tabel sebelum insert baru
        // DB::table('tb_jurusan')->truncate();

        DB::table('tb_jurusan')->insert([
                'id_jurusan' => 1,
                'kode_jurusan' => 'PPLG',
                'nama_jurusan' => 'Pengembangan Perangkat Lunak Dan Gim',
                'id_peminjaman' => 2,
                'created_at'   => now(),
                'updated_at'   => now(),
        ]);
    }
}
