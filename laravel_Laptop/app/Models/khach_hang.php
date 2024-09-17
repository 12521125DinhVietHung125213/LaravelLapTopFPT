<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khach_hang extends Model
{
    use HasFactory;
    protected $table = 'khach_hang';
    protected $primaryKey = 'ma_khach_hang';
    public $timestamps = false;
    protected $fillable = [
        'ten_khach_hang',
        'email',
        'diachi',
        'so_dien_thoai'

    ];
}
