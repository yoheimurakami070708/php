<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    protected $table = 'scores';

    protected $fillable =
    [
        'title',
        'time',
        'page'
    ]
}
