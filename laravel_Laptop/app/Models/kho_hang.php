<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kho_hang extends Model
{
    protected $table = 'kho_hang';
    protected $primaryKey = 'ma_san_pham';
    public $timestamps = false;
    protected $fillable = [
        'ten_san_pham',
        'ngay_san_xuat',
        'ma_khach_hang',
        'so_luong',
        'mau_sac'
    ];
}
