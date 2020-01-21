<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailcomponent extends Model
{

  protected $table = "detail_components";
  public function parent(){

      return $this->BelongsTo('App\component', 'components_id');

  }
}
