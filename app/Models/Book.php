<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'amazon_link',
        'image',
        'is_best_seller',
        'position',
    ];
}
