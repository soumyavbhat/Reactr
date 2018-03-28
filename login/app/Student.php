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
      'status_id', 'profile_image', 'first_name', 'last_name','current_schedules_id', 'fol_email', 'nonfol_email', 'student_number','address','phone', 'linkedin_account', 'programs_id','section', 'projects_id', 'roles_id', 'emergency_contact', 'emergency_number', 'graduation_year', 'current_title', 'current_company', 'contact_info'
    ];

    // public function stat()
    // {
    //
    //   return Status::where('id', $this->status)->first()->status_acr;
    // }
    //
    // public function prog()
    // {
    //
    //   return Program::where('id', $this->program)->first()->program_name;
    // }
    //
    // public function proj()
    // {
    //
    //   return Project::where('id', $this->project)->first()->project_name;
    // }

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
