<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Dashboard</title>
<link href="{{asset('_css/reset.css')}}" rel="stylesheet" media="screen, projection">
<!-- s<link href="{{asset('_css/main.css')}}" rel="stylesheet" media="screen, projection"> -->
<link href="{{asset('_css/dashboard.css')}}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</head>

<div id="app">

  <div class="sliderclip">
<h1 class="title">Students</h1>
<h3 class="desc">Internal, student and project information</h3>

  </div>

  <nav class="pagination">
    <!-- <a href="/dashboardReactr" class=""> -->
  <div class="mainBtn " id="mainBtn1" >
  <div class="iconMain reactrBtn">
  <img src="../images/reactr_icon.png" alt="Menu Icon">
  </div>
  <h2>Reactr</h2>
  </div>
  <!-- </a> -->

  <div class="mainBtn" id="mainBtn2">
  <div class="iconMain">
  <img src="../images/research_icon.png" alt="Menu Icon">
  </div>
  <h2>Research</h2>

  </div>
  <div class="mainBtn" id="mainBtn3">
  <div class="iconMain">
  <img src="../images/payroll_icon.png" alt="Menu Icon">
  </div>
  <h2>Payroll</h2>
  </div>
  <div class="mainBtn" id="mainBtn4">
  <div class="iconMain">
  <img src="../images/assets_icon.png" alt="Menu Icon">
  </div>
  <h2>Assets</h2>
  </div>
  <div class="mainBtn" id="mainBtn5">
  <div class="iconMain">
  <img src="../images/doc_icon.png" alt="Menu Icon">
  </div>
  <h2>Documents</h2>
  </div>

  <div class="mainBtn" id="mainBtn6">
  <div class="iconMain">
  <img src="../images/account_icon.png" alt="Menu Icon">
  </div>
  <h2>Account</h2>
  </div>
  </nav>
</div>

<!-- <script type="text/javascript" src="js/dashboard.main.js"></script> -->
<script type="text/javascript" src="{{URL::asset('js/dashboard.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/slide.js')}}"></script>





</body>
</html>
