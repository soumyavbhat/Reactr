<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    //
    public function current_schedule()
    {
      return $this->hasMany('App\CurrentSchedule');
    }
}
