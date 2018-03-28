<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Student Profile</title>
<link href="{{asset('_css/reset.css')}}" rel="stylesheet" media="screen, projection">
<link href="{{asset('_css/studentsprofile.css')}}" rel="stylesheet" media="screen, projection">
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

    <div class="content-container">

      <div class="box tbl">

        <div class="sidebar-first">

          <div class="profileImg-container">
<img class="profileImg" src="<?php echo asset("storage/profileImages/$student->profile_image")?>">
          </div>

          <div class="schedule">
            <div class="schedule-con">
              <h1>SCHEDULE</h1>

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
            </div>
          </div>
        </div>

        <div class="section-container">

          <div class="section-header">
            <div class="name">
              <div class="name-con center-con">
                <h1 id="student-name">{{$student->first_name}} {{$student->last_name}}</h1>
                <h2 id="student-id">Student # {{$student->student_number}}</h2>
              </div>
            </div>

            <div class="status">
              <div class="status-con center-con">
                <h1> {{$student->status->status_acr}}</h1>
                <p> {{$student->status->status_type}}<br> {{$student->graduation_year}}</p>
              </div>
            </div>
          </div>

          <div class="project">
            <div class="project-con info-con center-con">
              <h1>PROJECT:</h1>
              <p class="project-title"> {{$student->projects->project_name}}</p>

              <h1>ROLE:</h1>
              <p> {{$student->roles->role_type}}</p>

              <div class="secondProject toggleProject">
              <h1>PROJECT:</h1>
              <p class="project-title">Reactr Project</p>

              <h1>ROLE:</h1>
              <p>Back-end developer</p>
            </div>

              <img class="expand-button" src="<?php echo asset("images/down_arrow.png")?>">
            </div>
          </div>

          <div class="program">
            <div class="program-con info-con center-con">
              <h1>PROGRAM:</h1>
              <p>{{$student->programs->program_name}}</p>

              <h1>SECTION:</h1>
              <p>{{$student->section}}</p>

              <div class="secondProgram toggleProgram">
                          <h1>PROGRAM:</h1>
                          <p class="project-title">IMS</p>

                          <h1>SECTION:</h1>
                          <p>A</p>
                        </div>

              <img class="expand-button-two"  src="<?php echo asset("images/down_arrow.png")?>">
            </div>
          </div>

          <div class="contact-info">
            <div class="contact-info-con info-con center-con">
              <h1>CONTACT INFORMATION</h1>

              <h2>FOL EMAIL:</h2>
              <p> {{$student->fol_email}}</p>

              <h2>NON-FOL EMAIL:</h2>
              <p> {{$student->nonfol_email}}</p>

              <h2>ADDRESS:</h2>
              <p> {{$student->address}}</p>

              <h2>PHONE #:</h2>
              <p> {{$student->phone}}</p>

              <h2>LINKEDIN ACCOUNT:</h2>
              <p> {{$student->linkedin_account}}</p>

              <h2>EMERGENCY CONTACT:</h2>
              <p>{{$student->emergency_contact}}</p>

              <h2>EMERGENCY PHONE #:</h2>
              <p>{{$student->emergency_number}}</p>
            </div>
          </div>

          <div class="company-info">
            <div class="company-info-con info-con center-con">
              <h1>COMPANY INFORMATION</h1>

              <h2>COMPANY:</h2>
              <p> {{$student->current_company}}</p>

              <h2>CURRENT TITLE:</h2>
              <p> {{$student->current_title}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="side-menu">
      <a href="/dashboard" class="menu">
      <div class=" menu1">
        <div class="icon">
    <img src="../images/home_icon.png" alt="Menu Icon">
        </div>
        <h3>Home</h3>
      </div>
    </a>
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


  <script src="{{asset('js/profile.js')}}"></script>

</body>
</html>
