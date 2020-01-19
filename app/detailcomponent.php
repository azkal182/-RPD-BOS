<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailcomponent extends Model
{
  public function test(){

      return $this->hasMany('App\component', 'parent_id');

  }
}
