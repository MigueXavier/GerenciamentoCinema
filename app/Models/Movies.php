<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'director',
        'genre',
        'rating'
    ];
}
