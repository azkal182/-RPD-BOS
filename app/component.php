<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    protected $guarded = [];

    public function subcomponent(){

        return $this->hasMany('App\component', 'parent_id');

    }

    public function detailcomponent(){

        return $this->hasMany('App\component', 'parent_id')->where('level', '=','5' );

    }

    public function telepon()
    {
    	return $this->hasMany('App\detailcomponent', 'components_id');
    }

    public function telepon2()
    {
    	return $this->BelongsTo('App\detailcomponent', 'components_id');
    }
}
