<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ThuongHieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('thuong_hieu')->insert([
            'ten_thuong_hieu' => 'Nike'
        ]);

        DB::table('thuong_hieu')->insert([
            'ten_thuong_hieu' => 'Adidas'
        ]);

        DB::table('thuong_hieu')->insert([
            'ten_thuong_hieu' => 'Converse'
        ]);

        DB::table('thuong_hieu')->insert([
            'ten_thuong_hieu' => 'Gucci'
        ]);

        DB::table('thuong_hieu')->insert([
            'ten_thuong_hieu' => 'Puma'
        ]);

        DB::table('thuong_hieu')->insert([
            'ten_thuong_hieu' => 'Vans'
        ]);

        DB::table('thuong_hieu')->insert([
            'ten_thuong_hieu' => 'New Balance'
        ]);

        DB::table('thuong_hieu')->insert([
            'ten_thuong_hieu' => 'Balenciaga'
        ]);
    }
}
