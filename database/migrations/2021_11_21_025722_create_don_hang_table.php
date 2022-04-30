<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hang', function (Blueprint $table) {
            $table->increments('id_don_hang');
            $table->string('ten_nguoi_nhan');
            $table->string('sdt');
            $table->string('dia_chi_nhan');
            $table->string('ghi_chu')->nullable();
            $table->string('tong_tien')->nullable();
            $table->string('hinh_thuc_thanh_toan');
            // $table->string('so_luong');
            // $table->string('thanh_tien');
            $table->longText('hoa_don');
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
        Schema::dropIfExists('don_hang');
    }
}
