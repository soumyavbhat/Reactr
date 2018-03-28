<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentSchedule extends Model
{
    //
    protected $table = 'current_schedules';

    //
    public function days()
    {
      return $this->belongsTo('App\Day');
    }

    public function hours()
    {
      return $this->belongsTo('App\Hour');
    }

    public function student()
    {
      return $this->hasMany('App\Student');
    }

}
