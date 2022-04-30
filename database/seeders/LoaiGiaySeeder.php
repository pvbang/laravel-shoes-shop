<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LoaiGiaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loai_giay')->insert([
            'ten_loai_giay' => 'Thể thao',
        ]);

        DB::table('loai_giay')->insert([
            'ten_loai_giay' => 'Sandanl',
        ]);

        DB::table('loai_giay')->insert([
            'ten_loai_giay' => 'Sneaker',
        ]);

        DB::table('loai_giay')->insert([
            'ten_loai_giay' => 'Boots',
        ]);

    }
}
