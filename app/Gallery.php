<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'Gallery';
    protected $primaryKey = 'id';
    protected $fillable = ['title','image'];
    public $timestamps = false;
}
