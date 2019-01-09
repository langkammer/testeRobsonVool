<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailModelo extends Model
{
    protected $fillable = [
        'id',
        'assunto',
        'corpo',
        'created_at',
        'updated_at'

    ];


    public function novoModelo(array $attributes = []){

        $emaiModelo = new EmailModelo();
        $emaiModelo = new static($attributes);
        return  $aluguel->save();

    }
}
