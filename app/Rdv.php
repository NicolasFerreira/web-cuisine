<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    public $table = "rdv";
    protected $dateFormat = 'd-m-Y';
    public $timestamps = false;
}
