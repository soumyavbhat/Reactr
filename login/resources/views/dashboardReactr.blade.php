<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Menu</title>
<link href="{{asset('_css/reset.css')}}" rel="stylesheet" media="screen, projection"> -->
<link href="{{asset('_css/secondMenu.css')}}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</head>
<body>

<div id="app">

  <div class="sliderclip">
<h1 class="title">Students</h1>
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
    <div class="menu menu2" id="mainBtn1">
      <div class="icon">
  <img src="../images/reactr_icon.png" alt="Menu Icon">
      </div>
        <h3>Reactr</h3>
    </div>
    <div class="menu menu3" id="mainBtn2">
      <div class="icon">
  <img src="../images/research_icon.png" alt="Menu Icon">
      </div>
        <h3>Research</h3>
    </div>
    <div class="menu menu4" id="mainBtn3">
      <div class="icon">
  <img src="../images/payroll_icon.png" alt="Menu Icon">
      </div>
        <h3>Payroll</h3>
    </div>
    <div class="menu menu5" id="mainBtn4">
      <div class="icon">
  <img src="../images/assets_icon.png" alt="Menu Icon">
      </div>
        <h3>Assets</h3>
    </div>
    <div class="menu menu6" id="mainBtn5">
      <div class="icon">
  <img src="../images/doc_icon.png" alt="Menu Icon">
      </div>
        <h3>Documents</h3>
    </div>
    <div class="menu menu7" id="mainBtn6">
      <div class="icon">
  <img src="../images/settings_icon.png" alt="Menu Icon">
      </div>
        <h3>Settings</h3>
    </div>

  </nav>


    <nav class="pagination">
      <a href="/studentslist" class="mainBtn">
  <div>
    <div class="iconMain">
    <img src="../images/students_icon.png" alt="Menu Icon">
    </div>
    <h2>Students</h2>
  </div>
  </a>
  <div class="mainBtn ">
    <div class="iconMain">
    <img src="../images/clients_icon.png" alt="Menu Icon">
    </div>
    <h2>Clients</h2>

  </div>
  <div class="mainBtn ">
    <div class="iconMain">
    <img src="../images/projects_icon.png" alt="Menu Icon">
    </div>
    <h2>Projects</h2>
  </div>
  <div class="mainBtn ">
    <div class="iconMain">
    <img src="../images/surveys_icon.png" alt="Menu Icon">
    </div>
    <h2>Surveys</h2>
  </div>
  <div class="mainBtn ">
    <div class="iconMain">
    <img src="../images/interviews_icon.png" alt="Menu Icon">
    </div>
    <h2>Interviews</h2>
  </div>
    </nav>

</div>
<script type="text/javascript" src="{{URL::asset('js/dashboardReactr.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/slide.js')}}"></script>

</body>
</html>
