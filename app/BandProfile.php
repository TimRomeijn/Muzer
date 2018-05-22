<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BandProfile extends Model
{
    protected $guarded = [];

    public function musicians() {

        return $this->hasMany(MusicianProfile::class);
    }
}
