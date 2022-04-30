<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

class PhanQuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phan_quyen')->insert([
            'ten_phan_quyen' => 'Quản trị viên',
        ]);

        DB::table('phan_quyen')->insert([
            'ten_phan_quyen' => 'Người dùng',
        ]);

        DB::table('phan_quyen')->insert([
            'ten_phan_quyen' => 'Nhân viên',
        ]);
    }
}
