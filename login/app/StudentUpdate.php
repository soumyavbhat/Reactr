<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
   protected $table = 'students';
  protected $primaryKey = "id";
    //
    protected $fillable =[
      // 'student_current_schedules_id',
     'fol_email'
    ];

    public function status()
    {
// return Status::where('id', $this->status)->first()->status_acr;
      return $this->belongsTo('App\Status');

    }

    public function projects()
    {
      return $this->belongsTo('App\Project');
    }

    public function programs()
    {
      return $this->belongsTo('App\Program');
    }

    public function roles()
    {
      return $this->belongsTo('App\Role');
    }

    public function current_schedules()
    {
      return $this->belongsTo('App\CurrentSchedule')->with('days')->with('hours');
    }


}
