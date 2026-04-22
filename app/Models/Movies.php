<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'release_date',
        'director',
        'genre',
        'rating'
    ];
    public function tickets()
    {
        return $this->hasMany(Tickets::class);
    }
}
