<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $table = 'ServiceDetail';
    protected $primaryKey = 'id';
    protected $fillable = ['name','idService','description','price','image'];
}
