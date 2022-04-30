<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GiayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giay', function (Blueprint $table) {
            $table->increments('id_giay');
            $table->string('ten_giay');
            $table->string('ten_loai_giay');
            $table->string('ten_thuong_hieu');
            $table->longText('mo_ta')->nullable();
            $table->string('don_gia');
            $table->string('so_luong')->nullable();
            $table->string('hinh_anh_1')->nullable();
            $table->string('hinh_anh_2')->nullable();
            $table->string('hinh_anh_3')->nullable();
            $table->string('hinh_anh_4')->nullable();
            $table->string('ten_khuyen_mai')->nullable();
            $table->string('so_luong_mua')->nullable();
            // $table->string('danh_gia_binh_luan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giay');
        
    }
}
