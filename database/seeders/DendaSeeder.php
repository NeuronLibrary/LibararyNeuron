<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DendaSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_denda')->insert([
            [
                'id_denda' => 1,
                'id_detail_peminjaman' => 1,
                'jumlah_denda' => 5000,
                'status' => 'Belum'
            ],
        ]);
    }
}
