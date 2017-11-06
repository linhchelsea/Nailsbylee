<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'Contact';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','phone','message','reply','idUser'];
}
