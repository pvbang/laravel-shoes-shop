<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GiaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('giay')->insert([
            'ten_giay' => 'NMD R2',
            'ten_loai_giay' => 'Sandanl',
            'ten_thuong_hieu' => 'Gucci',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1200000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay13.jpg',
            'hinh_anh_2' => 'giay13.jpg',
            'hinh_anh_3' => 'giay13.jpg',
            'hinh_anh_4' => 'giay13.jpg',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-25 14:59:26',
            'updated_at' => '2021-11-25 14:59:26',
        ]);

       

        DB::table('giay')->insert([
            'ten_giay' => 'Nike Joma IC',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Nike',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay4.jpg',
            'hinh_anh_2' => 'giay4.jpg',
            'hinh_anh_3' => 'giay4.jpg',
            'hinh_anh_4' => 'giay4.jpg',
            'ten_khuyen_mai' => 'Mới ra mắt',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'The Nike Premier II',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Nike',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '999000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay3.jpg',
            'hinh_anh_2' => 'giay3.jpg',
            'hinh_anh_3' => 'giay3.jpg',
            'hinh_anh_4' => 'giay3.jpg',
            'ten_khuyen_mai' => 'Ngày lễ',
            // 'danh_gia_binh_luan' => '',
            'so_luong_mua' => '0',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Adidas PUREBOOST 21',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1590000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay20.jpg',
            'hinh_anh_2' => 'giay20.jpg',
            'hinh_anh_3' => 'giay20.jpg',
            'hinh_anh_4' => 'giay20.jpg',
            'ten_khuyen_mai' => 'Mới ra mắt',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Adidas STAN SMITH',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1290000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay21.jpg',
            'hinh_anh_2' => 'giay21.jpg',
            'hinh_anh_3' => 'giay21.jpg',
            'hinh_anh_4' => 'giay21.jpg',
            'ten_khuyen_mai' => 'Mới ra mắt',
            // 'danh_gia_binh_luan' => '',
            'so_luong_mua' => '0',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
        ]);
        
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas ALPHAMAGMA',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '799000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay22.jpg',
            'hinh_anh_2' => 'giay22.jpg',
            'hinh_anh_3' => 'giay22.jpg',
            'hinh_anh_4' => 'giay22.jpg',
            'ten_khuyen_mai' => 'Mới ra mắt',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Adidas RUNFALCON 2.0',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '599000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay23.jpg',
            'hinh_anh_2' => 'giay23.jpg',
            'hinh_anh_3' => 'giay23.jpg',
            'hinh_anh_4' => 'giay23.jpg',
            'ten_khuyen_mai' => 'Mới ra mắt',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);
        
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Tiempo Legend 9',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay2.jpg',
            'hinh_anh_2' => 'giay2.jpg',
            'hinh_anh_3' => 'giay2.jpg',
            'hinh_anh_4' => 'giay2.jpg',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        


        DB::table('giay')->insert([
            'ten_giay' => 'Puma One 5.3 TT',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Puma',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '699000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay7.jpg',
            'hinh_anh_2' => 'giay7.jpg',
            'hinh_anh_3' => 'giay7.jpg',
            'hinh_anh_4' => 'giay7.jpg',
            'ten_khuyen_mai' => 'Sale cuối năm',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);


        DB::table('giay')->insert([
            'ten_giay' => 'CNVR-WZ87_V1',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Converse',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '699000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay16.jpg',
            'hinh_anh_2' => 'giay16.jpg',
            'hinh_anh_3' => 'giay16.jpg',
            'hinh_anh_4' => 'giay16.jpg',
            'ten_khuyen_mai' => 'Không khuyễn mãi',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);


        DB::table('giay')->insert([
            'ten_giay' => 'Run Star Hike Sneaker',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Converse',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '966000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay17.jpg',
            'hinh_anh_2' => 'giay17.jpg',
            'hinh_anh_3' => 'giay17.jpg',
            'hinh_anh_4' => 'giay17.jpg',
            'ten_khuyen_mai' => 'Chủ vui nên khuyến mãi',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Chuck 70 Sneaker',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Converse',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1280000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay18.jpg',
            'hinh_anh_2' => 'giay18.jpg',
            'hinh_anh_3' => 'giay18.jpg',
            'hinh_anh_4' => 'giay18.jpg',
            'ten_khuyen_mai' => 'Sale cuối năm',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Archive Paint Splatter',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Converse',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1880000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay19.jpg',
            'hinh_anh_2' => 'giay19.jpg',
            'hinh_anh_3' => 'giay19.jpg',
            'hinh_anh_4' => 'giay19.jpg',
            'ten_khuyen_mai' => 'Không khuyễn mãi',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-29 14:59:26',
            'updated_at' => '2021-11-29 14:59:26',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Nike Top Sala14',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Nike',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay9.jpg',
            'hinh_anh_2' => 'giay9.jpg',
            'hinh_anh_3' => 'giay9.jpg',
            'hinh_anh_4' => 'giay9.jpg',
            'ten_khuyen_mai' => 'Không khuyễn mãi',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-25 14:59:26',
            'updated_at' => '2021-11-25 14:59:26',
        ]);
        
        DB::table('giay')->insert([
            'ten_giay' => 'Nike ACE Tango',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Nike',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '599000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay6.jpg',
            'hinh_anh_2' => 'giay6.jpg',
            'hinh_anh_3' => 'giay6.jpg',
            'hinh_anh_4' => 'giay6.jpg',
            'ten_khuyen_mai' => 'Mới ra mắt',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Mercurial',
            'ten_loai_giay' => 'Sandanl',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay15.jpg',
            'hinh_anh_2' => 'giay15.jpg',
            'hinh_anh_3' => 'giay15.jpg',
            'hinh_anh_4' => 'giay15.jpg',
            'ten_khuyen_mai' => 'Ngày lễ',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Nike FC',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Nike',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1100000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay8.jpg',
            'hinh_anh_2' => 'giay8.jpg',
            'hinh_anh_3' => 'giay8.jpg',
            'hinh_anh_4' => 'giay8.jpg',
            'ten_khuyen_mai' => 'Ngày lễ',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Adidas X Tango 17.1 FG',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay5.jpg',
            'hinh_anh_2' => 'giay5.jpg',
            'hinh_anh_3' => 'giay5.jpg',
            'hinh_anh_4' => 'giay5.jpg',
            'ten_khuyen_mai' => 'Không khuyễn mãi',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);
        

        DB::table('giay')->insert([
            'ten_giay' => 'Superstar KB',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Vans',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1350000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay10.jpg',
            'hinh_anh_2' => 'giay10.jpg',
            'hinh_anh_3' => 'giay10.jpg',
            'hinh_anh_4' => 'giay10.jpg',
            'ten_khuyen_mai' => 'Sale cuối năm',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Superstar J',
            'ten_loai_giay' => 'Sandanl',
            'ten_thuong_hieu' => 'Vans',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1290000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay11.jpg',
            'hinh_anh_2' => 'giay11.jpg',
            'hinh_anh_3' => 'giay11.jpg',
            'hinh_anh_4' => 'giay11.jpg',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-25 14:59:26',
            'updated_at' => '2021-11-25 14:59:26',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Nike Tiempo Legend',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Nike',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1990000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay4.jpg',
            'hinh_anh_2' => 'giay4.jpg',
            'hinh_anh_3' => 'giay4.jpg',
            'hinh_anh_4' => 'giay4.jpg',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-24 14:59:26',
            'updated_at' => '2021-11-24 14:59:26',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'ADIDAS X Speedflow',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay12.jpg',
            'hinh_anh_2' => 'giay12.jpg',
            'hinh_anh_3' => 'giay12.jpg',
            'hinh_anh_4' => 'giay12.jpg',
            'ten_khuyen_mai' => 'Sale cuối năm',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);


        DB::table('giay')->insert([
            'ten_giay' => 'Jung 96',
            'ten_loai_giay' => 'Thể thao',
            'ten_thuong_hieu' => 'New Balance',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '899000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay14.jpg',
            'hinh_anh_2' => 'giay14.jpg',
            'hinh_anh_3' => 'giay14.jpg',
            'hinh_anh_4' => 'giay14.jpg',
            // 'danh_gia_binh_luan' => '',
            'ten_khuyen_mai' => 'Sale cuối năm',
            'created_at' => '2021-12-01 17:21:31',
            'updated_at' => '2021-12-01 17:21:31',
            'so_luong_mua' => '0',
        ]);

        DB::table('giay')->insert([
            'ten_giay' => 'Mercurial Superfly',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Balenciaga',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '666000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay6.jpg',
            'hinh_anh_2' => 'giay6.jpg',
            'hinh_anh_3' => 'giay6.jpg',
            'hinh_anh_4' => 'giay6.jpg',
            'ten_khuyen_mai' => 'Chủ vui nên khuyến mãi',
            'so_luong_mua' => '0',
            // 'danh_gia_binh_luan' => '',
            'created_at' => '2021-11-24 14:59:26',
            'updated_at' => '2021-11-24 14:59:26',
        ]);

        
	
    }
}
