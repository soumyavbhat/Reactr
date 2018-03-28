<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Students Menu</title>
<link href="{{asset('_css/reset.css')}}" rel="stylesheet" media="screen, projection">
<link href="{{asset('_css/studentslist.css')}}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</head>

<body>
  <!-- <h1 style="color:#b5d338; font-size:3em; text-align:center">Students List<a href="/index.htm" title="home"></a></h1> -->
  <div id="app">

    <div class="slider-clip">
      <h1>Students</h1>

    </div>


  <div class="content-container">
<div class="top-menu">
    <div class="box search">
      <img src="../images/search_icon.png" alt="Search icon">
      <input type="text" name="search" placeholder="Search..">
      <!-- <img class="search_icon" src="images/search_icon.png"> -->
      <!-- <h1 class="search-title">Search</h1> -->
    </div>

    <div class="box filter">
      <h1 >Filter</h1>
      <img class="down_icon" src="images/down_icon.png">
    </div>
  </div>

  <div class="box tbl">
    <table>
      <tr class="table-titles">
        <th>STATUS</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>PROJECTS</th>
        <th>PROGRAM</th>
        <th>COMPANY</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>
      @foreach ($student as $student)

      <tr>
        <td><a class="list" href="/studentsprofile/{{$student->id}}"  id="{{$student->id}}">{{$student->status->status_acr}}</a></td>
        <td><a class="list" href="/studentsprofile/{{$student->id}}"  id="{{$student->id}}">{{$student->first_name}}</a></td>
        <td><a class="list" href="/studentsprofile/{{$student->id}}"  id="{{$student->id}}">{{$student->last_name}}</a></td>
        <td><a class="list" href="/studentsprofile/{{$student->id}}"  id="{{$student->id}}">{{$student->projects->project_name}}</a></td>
        <td><a class="list" href="/studentsprofile/{{$student->id}}"  id="{{$student->id}}">{{$student->programs->program_acr}}</a></td>
        <td><a class="list" href="/studentsprofile/{{$student->id}}"  id="{{$student->id}}">{{$student->company}}</a></td>
        <td> <a href="/studentsedit/{{$student->id}}" >  <img  class="edit-icon" src="images/edit_icon.png"></a></td>
        <td><img class="delete-icon" src="images/cross_icon.png"></td>
<!-- <td><a  href="/studentsprofile/{{$student->id}}"  id="{{$student->id}}">View </a></td> -->
      </tr>
      @endforeach


    </table>
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
