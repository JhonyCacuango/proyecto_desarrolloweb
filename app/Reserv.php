<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserv extends Model
{
    protected $fillable = ['file', 'column', 'chair', 'cuantity'];
}
