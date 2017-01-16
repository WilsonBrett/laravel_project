<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Title extends Model
{
    //public $timestamps = false;

    //
    public function department() {
        return this->BelongsTo('App\Models\Department');
    }
}
