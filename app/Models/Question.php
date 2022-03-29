<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'text',
        'quiz_id',
        'variant1',
        'variant2',
        'variant3',
        'variant4',
        'answer',
    ];
}
