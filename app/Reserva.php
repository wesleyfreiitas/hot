<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function hospede(){
        return $this->belongsTo('App\Hospede');
    }

    public function quarto(){
        return $this->belongsTo('App\Quarto');
    }
}
