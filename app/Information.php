<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'Information';
    protected $fillable = ['name','address','email','phone','facebook'
                            ,'instagram','twitter'];
}
