<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Student Form</title>
<link href="{{asset('_css/basic.css')}}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</script>
</head>
<body id="blogPage">
<header>
  <h1 style="color:#b5d338; font-size:3em; text-align:center">Student Form<a href="/student.htm" title="home"></a></h1>

  <style media="screen">
    th, td{
      padding: 10px 10px;
      border-right: solid 1px black;
      border-bottom: solid 1px black;

    }

  </style>
</header>
<div id="contentWrapper">
  <article id="mainContent">
<!-- action="students" -->
<!-- <h4 class="hidden">{{$student->id}}</h4> -->
<form action="../scheduleform/{{$student->id}}"  method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<table style="width=100%; align:center">
  <tr>
    <th>Days</th>
    <th>8-9</th>
    <th>9-10</th>
    <th>10-11</th>
    <th>11-12</th>
    <th>12-1</th>
    <th>1-2</th>
    <th>2-3</th>
    <th>3-4</th>
    <th>4-5</th>
  </tr>
  <tr>
    <td><input type="hidden"  value="1" id="1">Monday</td>
    <td><input type="checkbox" name="11" value="1 1"></td>
    <td><input type="checkbox" name="12" value="1 2"></td>
    <td><input type="checkbox" name="13" value="1 3"></td>
    <td><input type="checkbox" name="14" value="1 4"></td>
    <td><input type="checkbox" name="15" value="1 5"></td>
    <td><input type="checkbox" name="16" value="1 6"></td>
    <td><input type="checkbox" name="17" value="1 7"></td>
    <td><input type="checkbox" name="18" value="1 8"></td>
    <td><input type="checkbox" name="19" value="1 9"></td>
  </tr>
  <tr>
    <td><input type="hidden"  value="2" id="2">Tuesday</td>
    <td><input type="checkbox" name="21" value="2 1"></td>
    <td><input type="checkbox" name="22" value="2 2"></td>
    <td><input type="checkbox" name="23" value="2 3"></td>
    <td><input type="checkbox" name="24" value="2 4"></td>
    <td><input type="checkbox" name="25" value="2 5"></td>
    <td><input type="checkbox" name="26" value="2 6"></td>
    <td><input type="checkbox" name="27" value="2 7"></td>
    <td><input type="checkbox" name="28" value="2 8"></td>
    <td><input type="checkbox" name="29" value="2 9"></td>
  </tr>
  <tr>
    <td><input type="hidden"  value="3" id="3">Wednesday</td>
    <td><input type="checkbox" name="31" value="3 1"></td>
    <td><input type="checkbox" name="32" value="3 2"></td>
    <td><input type="checkbox" name="33" value="3 3"></td>
    <td><input type="checkbox" name="34" value="3 4"></td>
    <td><input type="checkbox" name="35" value="3 5"></td>
    <td><input type="checkbox" name="36" value="3 6"></td>
    <td><input type="checkbox" name="37" value="3 7"></td>
    <td><input type="checkbox" name="38" value="3 8"></td>
    <td><input type="checkbox" name="39" value="3 9"></td>
  </tr>
  <tr>
    <td><input type="hidden"  value="4" id="4">Thursday</td>
    <td><input type="checkbox" name="41" value="4 1"></td>
    <td><input type="checkbox" name="42" value="4 2"></td>
    <td><input type="checkbox" name="43" value="4 3"></td>
    <td><input type="checkbox" name="44" value="4 4"></td>
    <td><input type="checkbox" name="45" value="4 5"></td>
    <td><input type="checkbox" name="46" value="4 6"></td>
    <td><input type="checkbox" name="47" value="4 7"></td>
    <td><input type="checkbox" name="48" value="4 8"></td>
    <td><input type="checkbox" name="49" value="4 9"></td>

  </tr>
  <tr>
    <td><input type="hidden"  value="5" id="5">Friday</td>
    <td><input type="checkbox" name="51" value="5 1"></td>
    <td><input type="checkbox" name="52" value="5 2"></td>
    <td><input type="checkbox" name="53" value="5 3"></td>
    <td><input type="checkbox" name="54" value="5 4"></td>
    <td><input type="checkbox" name="55" value="5 5"></td>
    <td><input type="checkbox" name="56" value="5 6"></td>
    <td><input type="checkbox" name="57" value="5 7"></td>
    <td><input type="checkbox" name="58" value="5 8"></td>
    <td><input type="checkbox" name="59" value="5 9"></td>
  </tr>
</table>
<button name="submit" class="submit" action="submit" method="submit" type="submit">SUBMIT</button>

</form>

  </article>

</div>
</body>
</html>
