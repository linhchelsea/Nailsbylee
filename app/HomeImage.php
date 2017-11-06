<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    protected $table = 'HomeImage';
    protected $primaryKey = 'id';
    protected $fillable = ['title','name'];
    public $timestamps = false;
}
