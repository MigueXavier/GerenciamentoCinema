<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
        
        public function movie()
        {
            return $this->belongsTo(Movies::class);
        }
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
