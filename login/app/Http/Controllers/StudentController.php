<?php

namespace App\Http\Controllers;

// use Request;
use Illuminate\Http\Request;
use App\Student;
use App\Status;
use App\Program;
use App\Project;
use App\Role;
use App\CurrentSchedule;
use App\Day;
use App\Hour;


use Illuminate\Support\Facades\Storage;
use Input;
use DB;
use store;
use View;

class StudentController extends Controller
{
    //
public function students()
{
return view("students");
}

public function studentsform(Request $request)
{
$student = new Student;
$student->status_id = Input::get("status_id");
$student->profile_image= Input::get("profile_image");
if(Input::file('profile_image'))
{

$image = Input::get('profile_image');

$filename = Input::get('first_name') . '-' . Input::get('last_name') . '.jpg';
Storage::disk('local')->put($filename, file_get_contents($request->file('profile_image')));
$student->profile_image = Input::get('first_name') . '-' . Input::get('last_name') . '.jpg';
}

else
{
  $student->profile_image = "default.jpg";
}
// ^ By default the image file is called default.jpg. In case a student doesn't upload an image, it tkaes the value default and puts a template icon that can be found in the storage folder

$student->first_name= Input::get("first_name");
$student->last_name= Input::get("last_name");
$student->current_schedules_id= Input::get("current_schedules_id");
$student->fol_email= Input::get("fol_email");
$student->nonfol_email= Input::get("nonfol_email");
$student->student_number= Input::get("student_number");
$student->address= Input::get("address");
$student->phone= Input::get("phone");
$student->linkedin_account= Input::get("linkedin_account");
$student->programs_id= Input::get("programs_id");
$student->section= Input::get("section");
$student->projects_id= Input::get("projects_id");
$student->roles_id= Input::get("roles_id");
$student->emergency_contact= Input::get("emergency_contact");
$student->emergency_number= Input::get("emergency_number");
$student->graduation_year= Input::get("graduation_year");
$student->current_title= Input::get("current_title");
$student->current_company= Input::get("current_company");
$student->contact_info= Input::get("contact_info");
$student->save();

return redirect('thanks');
}

public function schedule($id)
{
  $student = Student::select()->where('id', $id)->first();

return View::make('studentschedule')->with(array('student'=>$student));
}

// ^ Students form filled will be saved in the database



public function scheduleform($id, Request $request)
{
  $student = Student::find($id);
$student_id = Input::get('id');
$id = $student->id;

$user = CurrentSchedule::where('student_id', '=', Input::get($id))->get();
if ($user === null) {
$a = "Empty";
}
else {
  $user = CurrentSchedule::where('student_id',$id)->delete();

    $a = "Found";
  }

  $l = 11;
for($i = 0; $i<=44; $i++){

  $currentschedule = new CurrentSchedule;
  $id = $student->id;
$currentschedule->student_id = $id;
if(!empty(Input::get()[$l]))
{
  $val = Input::get()[$l];
  $valexplode = explode(" ", $val);
  $currentschedule->days_id = $valexplode[0];
  $currentschedule->hours_id = $valexplode[1];
  $l++;
  $currentschedule->save();

}
else{

$l++;
}

}
return Redirect('studentslist');
}



public function profile($id)
{

$student = Student::select()->where('id', $id)->with('status')->with('projects')->with('programs')->with('roles')->first();
$current_schedules = CurrentSchedule::select()->where('student_id', $id)->with('days')->groupBy('days_id')->with('hours')->get();
$null = "Not Available";
$days = CurrentSchedule::select()->where('student_id', $id)->with('days')->with('hours')->get();
$monday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',1)->with('days')->with('hours')->get();
$tuesday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',2)->with('days')->with('hours')->get();
$wednesday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',3)->with('days')->with('hours')->get();
$thursday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',4)->with('days')->with('hours')->get();
$friday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',5)->with('days')->with('hours')->get();


return View::make('studentsprofile')->with(array('student'=>$student))->with(array('days'=>$days))->with(array('monday'=>$monday))->with(array('tuesday'=>$tuesday))->with(array('wednesday'=>$wednesday))->with(array('thursday'=>$thursday))->with(array('friday'=>$friday));
}

// ^ First takes student's id and pulls all data from different tables where student id = ".."

public function list()
{
  $student = Student::select()->with('status')->with('projects')->with('programs')->get();
return view('studentslist',['student'=>$student]);

}

// ^ Lists all the students

public function studentschedule($id)
{

  return view('studentschedule');
  $id = $id;
  $student = Student::select()->where('id',$id)->with('status')->with('projects')->with('programs')->with('roles')->get();
  $schedule = CurrentSchedule::select()->where('student_id', $id)->with('days')->with('hours')->get();

  $days = CurrentSchedule::select()->where('student_id', $id)->with('days')->with('hours')->get();

return (array('student'=>$student,'days'=>$days));
}

// ^ The schedule associated with the particular student id is rendered

public function edit($id)
{
$status = Status::get();
$student = Student::select()->where('id', $id)->with('status')->with('projects')->with('programs')->with('roles')->first();
$current_schedules = CurrentSchedule::select()->where('student_id', $id)->with('days')->groupBy('days_id')->with('hours')->get();
$null = "Not Available";
$days = CurrentSchedule::select()->where('student_id', $id)->with('days')->with('hours')->get();
$monday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',1)->with('days')->with('hours')->get();
$tuesday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',2)->with('days')->with('hours')->get();
$wednesday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',3)->with('days')->with('hours')->get();
$thursday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',4)->with('days')->with('hours')->get();
$friday = CurrentSchedule::select()->where('student_id', $id)->where('days_id',5)->with('days')->with('hours')->get();

return view('studentsedit')->with(array('student'=>$student))->with(array('days'=>$days))->with(array('monday'=>$monday))->with(array('tuesday'=>$tuesday))->with(array('wednesday'=>$wednesday))->with(array('thursday'=>$thursday))->with(array('friday'=>$friday));
}

// ^ After edit, if the old value wasn't changed, it keeps it the same way, else it replaces with new information. In this section, it just renders all the data and the next function it makes the necessary changes and saves the file
public function studentsformedit($id, Request $request)
{
  $student = Student::find($id);
 $this->validate($request,[
  'status_id', 'profile_image', 'first_name', 'last_name','current_schedules_id', 'fol_email', 'nonfol_email', 'student_number','address','phone', 'linkedin_account', 'programs_id','section', 'projects_id', 'roles_id', 'emergency_contact', 'emergency_number', 'graduation_year', 'current_title', 'current_company', 'contact_info'

]);
$studentUpdate = $request->all();
$student->update($studentUpdate);
session()->flash('notif', "Update has been made!");
 return back();

}
// ^ Updates the profile, including schedule

}
