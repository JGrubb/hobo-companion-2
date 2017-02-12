<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function shows()
    {
        return $this->belongsToMany(Show::class, 'versions');
    }
}
