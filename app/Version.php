<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    public function song() {
        return $this->belongsTo(\App\Song::class);
    }
    public function show() {
        return $this->belongsTo(\App\Show::class);
    }
}
