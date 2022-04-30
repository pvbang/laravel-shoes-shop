<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;

    protected $table = "khuyen_mai";

    protected $primaryKey = "id_khuyen_mai";

    public $timestamps = false;

    protected $fillable = ['ten_khuyen_mai', 'gia_tri_khuyen_mai'];
}
