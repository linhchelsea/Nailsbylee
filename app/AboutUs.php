<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'AboutUs';
    protected $fillable = ['detail','image'];
    public $timestamps = false;
}
