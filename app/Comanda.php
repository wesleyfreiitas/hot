<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    public function hospede(){
        return $this->belongsTo('App\Hospede');
    }

    public function quarto(){
        return $this->belongsTo('App\Quarto');
    }
}
