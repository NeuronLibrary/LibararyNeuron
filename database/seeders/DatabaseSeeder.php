<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder yang ingin dijalankan
        $this->call([
            UsersSeeder::class,
            RolesSeeder::class,
            JurusanSeeder::class,
            BukuSeeder::class,
            PeminjamanSeeder::class,
            DetailPeminjamanSeeder::class,
            DendaSeeder::class,
            NotifikasiSeeder::class,
             // ini seeder tb_roles
            // Tambahkan seeder lain di sini jika perlu
        ]);
    }
}
