<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BandProfile extends Model
{
    protected $guarded = [];

    public function musicians() {

        return $this->hasMany(MusicianProfile::class);
    }

    public function scopeSearch($query, $search) {

        return $query->where('name', 'like', '%' .$search. '%');
    }
}
