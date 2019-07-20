<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    public function produtos()
    {
        return $this->belongsToMany('App\Produto');
    }
}
