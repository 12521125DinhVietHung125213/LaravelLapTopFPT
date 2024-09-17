<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class san_pham extends Model
{
    use HasFactory;
    protected $table = 'san_pham';
    protected $primaryKey = 'ma_san_pham';
    public $timestamps = false;
    protected $fillable = [
        'ten_san_pham',
        'gia',
        'size',
        'mau_sac',
        'mo_ta',
        'ma_danh_muc',
        'anh_sanpham',
        'soluong',
        'anhhover1',
        'anhhover2'
    ];
    public function danhMuc()
    {
        return $this->belongsTo(danh_muc_san_pham::class, 'ma_danh_muc', 'ma_danh_muc');
    }
}
