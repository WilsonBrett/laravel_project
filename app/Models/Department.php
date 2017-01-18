<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Title;

class Department extends Model {
    public $timestamps = false;
    protected $fillable = ['department_name'];

    public function titles() {
        return $this->HasMany('App\Models\Title');
    }
}
