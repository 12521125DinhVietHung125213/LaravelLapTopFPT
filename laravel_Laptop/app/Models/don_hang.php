<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class don_hang extends Model
{
    use HasFactory;
    protected $table = 'don_hang';
    protected $primaryKey = 'ma_don_hang';
    public $timestamps = false;
    protected $fillable = [
        'ma_khach_hang',
        'ngay_dat_hang',
        'tong_tien',
        'trang_thai',
        'ten_khach',
        'dia_chi',
        'ghi_chu',
        'sdt'

    ];

}
