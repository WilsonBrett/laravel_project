<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    //I set timestamps to false because on update eloquent was using a different timezone then on create.
    public $timestamps = false;
    protected $fillable = ['firstname','lastname','username','password'];
}
