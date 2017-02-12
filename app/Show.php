<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{

    public function songs() {
        return $this->belongsToMany(Song::class, 'versions')
            ->withPivot('position', 'transition', 'song_notes', 'set_number');
    }

    public function venue() {
        return $this->belongsTo(Venue::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'shows_users');
    }
}
