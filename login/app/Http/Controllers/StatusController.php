<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students as Students;
use App\Status as Status;
class StatusController extends Controller
{
    //
    public function studentStatus($students_id, $status_id)
    {
      // $status_instance = new Status;
      $students = $students_instance->find($status_id);
      $status = $status_instance->find($status_id);

      $status->students()->associate($students);
      $status->save();

      return route('test');
      // return view('studentsList');
    }
}
