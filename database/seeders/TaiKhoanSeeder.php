<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;


class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Admin',
            'email' => 'admin@gmail.com',
            'sdt' => '0123456789',
            'Ten_dang_nhap' => 'admin',
            'password' => Hash::make('admin'),
            'id_phan_quyen' => '1',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Phan Văn Bằng',
            'email' => 'pvbang@gmail.com',
            'sdt' => '0123456788',
            'Ten_dang_nhap' => 'bang',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Phan Văn Bằng 2',
            'email' => 'pvbang2@gmail.com',
            'sdt' => '0123456787',
            'Ten_dang_nhap' => 'bang2',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Phan Văn Bằng 3',
            'email' => 'pvbang3@gmail.com',
            'sdt' => '0123456786',
            'Ten_dang_nhap' => 'bang3',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);

        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Phan Văn Bằng 4',
            'email' => 'pvban4g@gmail.com',
            'sdt' => '0123456785',
            'Ten_dang_nhap' => 'bang4',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);
        
        DB::table('users')->insert([
            'ten_nguoi_dung' => 'Phan Văn Bằng 5',
            'email' => 'pvbang5@gmail.com',
            'sdt' => '0123456784',
            'Ten_dang_nhap' => 'bang5',
            'password' => Hash::make('123456789'),
            'id_phan_quyen' => '2',
        ]);
    }
}
	
