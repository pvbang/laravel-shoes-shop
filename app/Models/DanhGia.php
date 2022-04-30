<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;
    
    protected $table = "danh_gia";

    protected $primaryKey = "id_danh_gia";

    public $timestamps = true;

    protected $fillable = [
        'ten_danh_gia',
        'id_user',
        'danh_gia',
        'danh_gia_binh_luan',
        'id_giay',
    ];
}
