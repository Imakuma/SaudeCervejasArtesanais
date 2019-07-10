<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coletiva extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function produtos()
    {
        return $this->hasMany('App\Produto');
    }
}
