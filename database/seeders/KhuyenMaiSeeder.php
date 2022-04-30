<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

class KhuyenMaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('khuyen_mai')->insert([
            'ten_khuyen_mai' => 'Không khuyễn mãi',
            'gia_tri_khuyen_mai' => '0'
        ]);

        DB::table('khuyen_mai')->insert([
            'ten_khuyen_mai' => 'Ngày lễ',
            'gia_tri_khuyen_mai' => '15'
        ]);

        DB::table('khuyen_mai')->insert([
            'ten_khuyen_mai' => 'Mới ra mắt',
            'gia_tri_khuyen_mai' => '10'
        ]);

        DB::table('khuyen_mai')->insert([
            'ten_khuyen_mai' => 'Sale cuối năm',
            'gia_tri_khuyen_mai' => '5'
        ]);

        DB::table('khuyen_mai')->insert([
            'ten_khuyen_mai' => 'Chủ vui nên khuyến mãi',
            'gia_tri_khuyen_mai' => '3'
        ]);
    }
}
