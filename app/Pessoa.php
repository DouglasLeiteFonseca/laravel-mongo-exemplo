<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Pessoa extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'pessoa';
    
    protected $fillable = [
        'nome', "dt_nascimento", "email","sexo"
    ];
}
