<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    //
    public function current_schedule()
    {
      return $this->hasMany('App\CurrentSchedule');
    }
}
