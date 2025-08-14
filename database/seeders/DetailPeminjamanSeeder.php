<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPeminjamanSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_detail_peminjaman')->insert([
            [
                'id_detail_peminjaman' => 1,
                'id_peminjaman' => 1,
                'id_buku' => 1,
                'tanggal_kembali' => now(),
                'status_kembali' => 'kembali',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}
