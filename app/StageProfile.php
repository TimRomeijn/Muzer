<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StageProfile extends Model
{
    protected $guarded = [];

    public function scopeSearch($query, $search) {

        return $query->where('name', 'like', '%' .$search. '%');
    }
}
