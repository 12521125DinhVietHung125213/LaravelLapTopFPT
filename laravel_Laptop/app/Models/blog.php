<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'ma_blog';
    public $timestamps = false;
    protected $fillable = [
        'image_blog',
        'noidung1',
        'noidung2'
    ];
}
