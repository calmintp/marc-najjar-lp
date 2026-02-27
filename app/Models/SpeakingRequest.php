<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpeakingRequest extends Model
{
   protected $fillable = [
    'name',
    'email',
    'subject',
    'message',
];
}
