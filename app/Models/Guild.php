<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    public function heroes(){
        return $this->hasMany('App\Models\Hero');
    }
}
