<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicianProfile extends Model
{
    protected $guarded = [];

    public function bands(){

        return $this->belongsTo(BandProfile::class);
    }
}
