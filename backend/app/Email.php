<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
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
