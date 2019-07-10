<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function vendas()
    {
        return $this->belongsToMany('App\Venda');
    }

    public function comprasColetivas()
    {
        return $this->belongsTo('App\Coletiva');
    }

    public function leilaos()
    {
        return $this->belongsTo('App\Leilao');
    }
}
