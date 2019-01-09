<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailFila extends Model
{
    //
    protected $fillable = [
        'id',
        'nome',
        'email',
        'created_at',
        'updated_at'

    ];

}
