<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{

    public function songs() {
        return $this->belongsToMany(Song::class, 'versions');
    }
}