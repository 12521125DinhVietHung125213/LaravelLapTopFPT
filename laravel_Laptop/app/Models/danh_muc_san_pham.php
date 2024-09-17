<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danh_muc_san_pham extends Model
{
    use HasFactory;
    protected $table = 'danh_muc_san_pham';
    protected $primaryKey = 'ma_danh_muc';
    public $timestamps = false;
    protected $fillable = [
        
        'ten_danh_muc'
    ];

    public function sanPhams()
    {
        return $this->hasMany(san_pham::class, 'ma_danh_muc', 'ma_danh_muc');
    }
}
