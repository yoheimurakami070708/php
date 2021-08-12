<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    // テーブル名
    protected $table = 'scores';
    // 可変項目
    protected $fillable =
    [
        'title',
        'time',
        'page'
    ];
    
    public $timestamps = false;
}
