<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
    protected $table = 'GiftCard';
    protected $primaryKey = 'id';
    protected $fillable = ['title','image'];
    public $timestamps = false;
}
