<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    use HasFactory;

    protected $table = "thuong_hieu";

    protected $primaryKey = "id_thuong_hieu";

    public $timestamps = false;

    protected $fillable = ['ten_thuong_hieu'];
}
