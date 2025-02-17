<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'loan_date',
        'return_date',
        'status'
    ]
}
