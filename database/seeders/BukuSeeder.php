<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_buku')->insert([
                'id_buku' => 1,
                'judul' => 'Pemrograman Laravel',
                'penulis' => 'Budi Santoso',
                'penerbit' => 'Informatika Press',
                'tahun_terbit' => 2023,
                'stok' => 5,
                'created_at'   => now(),
                'updated_at'   => now(),           
        ]);
    }
}
