<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'Service';
    protected $primaryKey = 'id';
    protected $fillable = ['name','description','preview','image','atHome'];
}
