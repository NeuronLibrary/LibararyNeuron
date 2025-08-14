<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotifikasiSeeder extends Seeder
{
    public function run()
    {
        // Ambil user pertama dari tabel users
        $user = DB::table('users')->first();

        if ($user) {
            DB::table('tb_notifikasi')->insert([
                [
                    'id_notifikasi' => 1,
                    'usr_id' => $user->usr_id, // pakai usr_id yang valid
                    'pesan' => 'Buku "Pemrograman Laravel" harus dikembalikan besok.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
