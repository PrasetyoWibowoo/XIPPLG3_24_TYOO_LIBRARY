<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'rating',
        'comment'
    ]
}
