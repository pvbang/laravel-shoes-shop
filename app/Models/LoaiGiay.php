<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiGiay extends Model
{
    use HasFactory;

    protected $table = "loai_giay";

    protected $primaryKey = "id_loai_giay";

    public $timestamps = true;

    protected $fillable = ['ten_loai_giay'];
}
