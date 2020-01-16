<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    protected $guarded = [];

    public function subcomponent(){

        return $this->hasMany('App\component', 'parent_id');

    }
}
