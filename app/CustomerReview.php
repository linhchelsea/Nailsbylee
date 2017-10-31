<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    protected $table = 'CustomerReview';
    protected $primaryKey = 'id';
    protected $fillable = ['name','content','image'];
    public $timestamps = false;
}
