<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  protected $table = 'status';
  // protected $primaryKey = "status_id";


// public function statusName()
// {
//   return Students::where('id', $this->students_id)->first()->first_name;
// }

public function student()
{
  return $this->hasMany('App\Student');
}
}
