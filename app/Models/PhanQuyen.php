<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhanQuyen extends Model
{
    use HasFactory;
    
    protected $table = "phan_quyen";

    protected $primaryKey = "id_phan_quyen";

    public $timestamps = false;

    protected $fillable = ['ten_phan_quyen'];
}
