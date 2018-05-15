<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicianProfile extends Model
{

    public function bands(){

        return $this->belongsTo(BandProfile::class);
    }
}
