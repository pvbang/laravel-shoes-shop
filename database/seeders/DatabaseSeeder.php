<?php

namespace Database\Seeders;

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
        $this->call([
            GiaySeeder::class,
            KhuyenMaiSeeder::class,
            ThuongHieuSeeder::class,
            LoaiGiaySeeder::class,
            PhanQuyenSeeder::class,
            TaiKhoanSeeder::class,
        ]);
    }
}
