<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    protected $table = 'slider';
    protected $primaryKey = 'ma_slider';
    public $timestamps = false;
    protected $fillable = [
        'image_slider',
        'text1',
        'text2',
    ];
}
