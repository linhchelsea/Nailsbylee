<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PolishBrand extends Model
{
    protected $table = 'PolishBrand';
    protected $primaryKey = 'id';
    protected $fillable = ['name','description', 'price','image'];
    public $timestamps = false;
}
