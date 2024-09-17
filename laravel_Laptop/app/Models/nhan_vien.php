<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhan_vien extends Model
{
    use HasFactory;
    protected $table = 'nhan_vien';
    protected $primaryKey = 'ma_nhan_vien';
    public $timestamps = false;
    protected $fillable = [
        'ten_nhan_vien',
        'gioi_tinh',
        'ngay_sinh',
        'dia_chi',
        'sdt',
        'cmnd',
        'anh_nhanvien'
    ];

}
