<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //defnimos la tabla
    protected $table = 'usuarios';
    public $timestamps =false;
}
