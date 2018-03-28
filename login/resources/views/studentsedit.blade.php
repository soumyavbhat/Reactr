<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Student Profile</title>
<link href="{{asset('_css/reset.css')}}" rel="stylesheet" media="screen, projection">
<link href="{{asset('_css/studentsedit.css')}}" rel="stylesheet" media="screen, projection">
<link href="{{asset('_css/sidebar.css')}}" rel="stylesheet" media="screen, projection">

<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700" rel="stylesheet">

<!-- <script type="text/javascript" src="js/vue.min.js"></script>
<script type="text/javascript" src="js/studentslist.js"></script>
<script type="text/javascript" src="js/side-menu.js"></script> -->


<meta name="viewport" content="initial-scale=1.0" />
</head>

<body>

  <div id="app">

    <div class="slider-clip">
      <h1>Students</h1>

    </div>

    <form  id="{{$student->id}}" action="../studentsformedit/{{$student->id}}"  method="patch" enctype="multipart/form-data">

    <div class="content-container">

      <div class="box tbl">

        <div class="sidebar-first">

          <div class="profileImg-container">
            <input type="hidden" name="profile_image" value="{{ $profile_image or old('profile_image', $student->profile_image) }}">
<img class="profileImg" src="<?php echo asset("storage/profileImages/$student->profile_image")?>">
          </div>

          <div class="schedule">
            <div class="schedule-con">
              <h1 style="text-align:center">SCHEDULE</h1>

              <ul>MONDAY</ul>
              <?php foreach ($monday as $monday): ?>
                <li>{{$monday->hours->hours}}</li>
              <?php endforeach; ?>



              <ul>TUESDAY</ul>
              <?php foreach ($tuesday as $tuesday): ?>
                <li>{{$tuesday->hours->hours}}</li>
<?php endforeach; ?>

              <ul>WEDNESDAY</ul>
              <?php foreach ($wednesday as $wednesday): ?>
                <li>{{$wednesday->hours->hours}}</li>
<?php endforeach; ?>

              <ul>THURSDAY</ul>
              <?php foreach ($thursday as $thursday): ?>
                <li>{{$thursday->hours->hours}}</li>
<?php endforeach; ?>

              <ul>FRIDAY</ul>
              <?php foreach ($friday as $friday): ?>
                <li>{{$friday->hours->hours}}</li>
<?php endforeach; ?>
 <a href="/schedule/{{$student->id}}">Add Schedule</a>


            </div>

          </div>
        </div>

        <div class="section-container">

          @if(session()->has('notif'))
          <div class="popup">
          <h2>The changes have been submitted. </h2>
          <button type="button" name="button" class="close"><h5>Close</h5> </button>
          </div>
          @endif
          <!-- <div class="popup">
        <h2>The changes have been submitted and can be viewed. </h2>
        <button type="button" name="button"><h5>Close</h5> </button>
          </div> -->

          <div class="section-header">
            <div class="name">
              <div class="name-con center-con">
                <h1 id="student-name"><input type="hidden" name="first_name" value="{{ $first_name or old('first_name', $student->first_name) }}">{{$student->first_name}}<input type="hidden" name="last_name" value="{{ $last_name or old('last_name', $student->last_name) }}"> {{$student->last_name}}</h1>
                <h2 id="student-id"><input type="hidden" name="student_number" value="{{ $student_number or old('student_number', $student->student_number) }}" >Student # {{$student->student_number}}</h2>
              </div>
            </div>

            <div class="status">
              <div class="status-con center-con">
                <h1>
                 {{$student->status->status_acr}}
                </h1>
                <p>
                     <select name="status_id" value="{{ $status_id or old('status_id', $student->status_id) }}" >{{$student->status->status_type}}
                       <option  value="{{ $status_id or old('status_id', $student->status_id) }}">{{$student->status->status_type}}</option>
                       <option value="1">Alumni</option>
                       <option value="2">Current</option>
                       <option value="3">Prospective</option>
</select>
                     <br> <input type="hidden" name="graduation_year" value="{{ $graduation_year or old('graduation_year', $student->graduation_year) }}">{{$student->graduation_year}}</p>
              </div>
            </div>
          </div>

          <div class="project">
            <div class="project-con info-con center-con">
              <h1>PROJECT:</h1>
              <p class="project-title">
                <select name="projects_id" type="text" placeholder="{{$student->projects->project_name}}" value="{{ $projects_id or old('projects_id', $student->projects_id) }}">
                  <option value="{{ $projects_id or old('projects_id', $student->projects_id) }}">{{$student->projects->project_name}}</option>
                  <option value="1">Work Study</option>
                  <option value="2">HR Downloads</option>
                  <option value="3">JE Bearing</option>
                  <option value="4">Dental Strategy</option>

                </select>
                </p>

              <h1>ROLE:</h1>
              <p>
                <select name="roles_id" type="text" placeholder="{{$student->roles->role_type}}" value="{{ $roles_id or old('roles_id', $student->roles_id) }}" >
                  <option  value="{{ $roles_id or old('roles_id', $student->roles_id) }}" >{{$student->roles->role_type}}</option>
                  <option value="1">Front-end developer and Designer</option>
                  <option value="2">Front-end developer</option>
                  <option value="3">Back-end developer</option>

                </select>
              </p>


              <!-- <div class="secondProject toggleProject">
              <h1>PROJECT:</h1>
              <p class="project-title">Reactr Project</p>

              <h1>ROLE:</h1>
              <p>Back-end developer</p>
            </div> -->

              <!-- <img class="expand-button" src="<?php echo asset("images/down_arrow.png")?>"> -->
            </div>
            <h2 class="add">Add</h2>
          </div>

          <div class="program">
            <div class="program-con info-con center-con">
              <h1>PROGRAM:</h1>
              <p>
                <select name="program_id" type="text" placeholder="{{$student->programs->program_name}}" value="{{ $program_id or old('program_id', $student->program_id) }}">
                  <option value="{{ $program_id or old('program_id', $student->program_id) }}">{{$student->programs->program_name}}</option>
                  <option value="1">Interactive Media Design - Level 1</option>
                  <option value="2">Interactive Media Design - Level 2</option>
                  <option value="3">Interactive Media Design - Level 3</option>
                  <option value="4">Interactive Media Design - Level 4</option>
                  <option value="5">Interactive Media Specialist - Level 1</option>
                  <option value="6">Interactive Media Specialist - Level 2</option>

                </select>
              </p>

              <h1>SECTION:</h1>
              <p>
                <select name="section" type="text"placeholder="{{$student->section}}" value="{{ $section or old('section', $student->section) }}">
                  <option value="{{ $section or old('section', $student->section) }}">{{$student->section}}</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                </select>
              </p>

              <!-- <div class="secondProgram toggleProgram">
                          <h2>PROGRAM:</h2>
                          <p class="project-title">IMS</p>

                          <h2>SECTION:</h2>
                          <p>A</p>
                        </div> -->

              <!-- <img class="expand-button-two"  src="<?php echo asset("images/down_arrow.png")?>"> -->
            </div>
            <h2 class="add2">Add</h2>

          </div>

          <div class="contact-info">
            <div class="contact-info-con info-con center-con">
                <h1>CONTACT INFORMATION</h1>


              <h2>FOL EMAIL:</h2>
              <p><input name="fol_email" type="text"placeholder="{{$student->fol_email}}" value="{{ $fol_email or old('fol_email', $student->fol_email) }}"> </p>

              <h2>NON-FOL EMAIL:</h2>
              <p><input name="nonfol_email" type="text" placeholder="{{$student->nonfol_email}}" value="{{ $nonfol_email or old('nonfol_email', $student->nonfol_email) }}"> </p>

              <h2>ADDRESS:</h2>
              <p><input name="address" type="text" placeholder="{{$student->address}}" value="{{ $address or old('address', $student->address) }}"> </p>

              <h2>PHONE #:</h2>
              <p> <input name="phone" type="text" placeholder="{{$student->phone}}" value="{{ $phone or old('phone', $student->phone) }}"></p>

              <h2>LINKEDIN ACCOUNT:</h2>
              <p> <input name="linkedin_account" type="text"placeholder="{{$student->linkedin_account}}" value="{{ $linkedin_account or old('linkedin_account', $student->linkedin_account) }}"></p>

              <h2>EMERGENCY CONTACT:</h2>
              <p><input name="emergency_contact" type="text" placeholder="{{$student->emergency_contact}}" value="{{ $emergency_contact or old('emergency_contact', $student->emergency_contact) }}"></p>

              <h2>EMERGENCY PHONE #:</h2>
              <p><input name="emergency_number" type="text"placeholder="{{$student->emergency_number}}" value="{{ $emergency_number or old('emergency_number', $student->emergency_number) }}"> </p>
            </div>
          </div>

          <div class="company-info">
            <div class="company-info-con info-con center-con">
              <h1>COMPANY INFORMATION</h1>

              <h2>COMPANY:</h2>
              <p><input name="current_company" type="text" placeholder="{{$student->current_company}}" value="{{ $current_company or old('current_company', $student->current_company) }}"> </p>

              <h2>CURRENT TITLE:</h2>
              <p><input name="current_title" type="text" placeholder="{{$student->current_title}}" value="{{ $current_title or old('current_title', $student->current_title) }}"> </p>

              <input type="hidden" name="contact_info" value="{{ $contact_info or old('contact_info', $student->contact_info) }}">
            </div>
          </div>
          <div class="button">
            <button name="submit" class="submit" action="submit" type="update">SUBMIT</button>
          </div>
        </div>
      </div>
    </div>
<!-- {!! Form::close() !!} -->
</form>

    <nav class="side-menu">
      <div class="menu menu1">
        <div class="icon">
<img src="../images/home_icon.png" alt="Menu Icon">
        </div>
        <h3>Home</h3>
      </div>
      <div class="menu menu2">
        <div class="icon">
<img src="../images/reactr_icon.png" alt="Menu Icon">
        </div>
          <h3>Reactr</h3>
      </div>
      <div class="menu menu3">
        <div class="icon">
<img src="../images/research_icon.png" alt="Menu Icon">
        </div>
          <h3>Research</h3>
      </div>
      <div class="menu menu4">
        <div class="icon">
<img src="../images/payroll_icon.png" alt="Menu Icon">
        </div>
          <h3>Payroll</h3>
      </div>
      <div class="menu menu5">
        <div class="icon">
<img src="../images/assets_icon.png" alt="Menu Icon">
        </div>
          <h3>Assets</h3>
      </div>
      <div class="menu menu6">
        <div class="icon">
<img src="../images/doc_icon.png" alt="Menu Icon">
        </div>
          <h3>Documents</h3>
      </div>
      <div class="menu menu7">
        <div class="icon">
<img src="../images/settings_icon.png" alt="Menu Icon">
        </div>
          <h3>Settings</h3>
      </div>

    </nav>

  </div>


  <script src="{{asset('js/editprofile.js')}}"></script>

</body>
</html>
