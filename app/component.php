<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    protected $guarded = [];

    public function subcomponent(){

        return $this->hasMany('App\component', 'parent_id')->where('level', '!=','5' );

    }

    public function detailcomponent(){

        return $this->hasMany('App\component', 'parent_id')->where('level', '=','5' );

    }
}
