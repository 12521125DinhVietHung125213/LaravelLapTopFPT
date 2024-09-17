<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chi_tiet_don_hang extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_don_hang';
    protected $primaryKey = 'ma_chi_tiet_don_hang';
    public $timestamps = false;
    protected $fillable = [
        'ma_don_hang',
        'ma_san_pham',
        'ten_san_pham',
        'so_luong',
        'gia',
        'kich_co',
        'mau_sac',

    ];

    public static function laySanPhamTheoMaDonHang($ma_don_hang)
    {
        return self::where('ma_don_hang', $ma_don_hang)->get();
    }
}
