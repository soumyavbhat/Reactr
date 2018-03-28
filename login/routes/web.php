<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/thanks', function () {
    return view('thanks');
});



                  // -- REGISTER

Route::get('/register', 'UserController@register');
Route::post('/registerfill', 'UserController@registerfill');


                //-- LOGIN

Route::get('/login', 'LoginController@login');
Route::post('/loginfill', 'LoginController@loginfill');

              //-- FORGOT PASSWORD
              // Still doesn't function

Route::get('/forgot-password', function()
{
  return View::make('forgot-password');
});

Route::post('/forgot-password', function()
{
$user = User::whereEmail($request->email);
});

// group routes

              //-- LOGOUT

Route::get('/logout', function(){
  Auth::logout();
return View::make('logout');
});


          //-- DASHBOARD

Route::get('/dashboard', array(
  'before' => 'auth',
  function()
{
  return View::make('dashboard');
}
))->middleware('auth');

Route::get('/dashboardReactr', array(
  // 'before' => 'auth',
  function()
{
  return View::make('dashboardReactr');
}
));
// ->middleware('auth');


                  //-- STUDENTS
      // Students form
Route::get('/students','StudentController@students');
Route::post('/studentsform' ,'StudentController@studentsform');

      // Students schedule
Route::get('/schedule/{id}' ,'StudentController@schedule');
Route::post('/scheduleform/{id}' ,'StudentController@scheduleform');
Route::delete('/scheduleformd/{id}' ,'StudentController@scheduleform');

// Route::get('/studentsprofile', 'StudentController@studentsProfile');


          // AUTH
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


                //PROFILE
        // Rendering all students list
Route::get('/studentslist', 'StudentController@list')->middleware('auth');

      // Rendering student's profile
Route::get('/studentsprofile/{id}', 'StudentController@profile')->middleware('auth');

      // Student's form to edit
Route::get('/studentsedit/{id}', 'StudentController@edit')->middleware('auth');
Route::get('/studentsformedit/{id}', 'StudentController@studentsformedit')->middleware('auth');
