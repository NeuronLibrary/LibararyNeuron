<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    public function run()
    {
        // Ambil jurusan dan user yang sudah ada di DB
        $jurusan = DB::table('tb_jurusan')->inRandomOrder()->first();
        $user = DB::table('users')->inRandomOrder()->first();

        // Pastikan keduanya ada sebelum insert
        if ($jurusan && $user) {
            DB::table('tb_peminjaman')->insert([
                [
                    'id_jurusan' => $jurusan->id_jurusan,
                    'id_peminjaman' => 1,
                    'status' => 'Dipinjam',
                    'tanggal_pinjam' => '2025-08-01',
                    'updated_at' => now(),
                    'usr_id' => $user->usr_id,
                ],
            ]);
        } else {
            $this->command->warn('⚠ Tidak ada data jurusan atau user, seeding tb_peminjaman dilewati.');
        }
    }
}
