<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  protected $table = 'programs';

    //
    public function student()
    {
      return $this->hasMany('App\Student');
    }
}
