<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Registration</title>
<link href="{{asset('_css/basic.css')}}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</script>
</head>
<body id="blogPage">
<header>
  <h1 style="color:#b5d338; font-size:3em; text-align:center">Reactr Registration<a href="/index.htm" title="home"></a></h1>
</header>
<div id="contentWrapper">
  <article id="mainContent">
    <h1>Sign Up / Register Here!</h1>
    <article class="post">
      <h2>New User Registration</h2>

    {{Form::open(array('url'=>'register'))}}

    {{Form::label('first_name', 'First Name')}}
    {{Form::text('first_name')}}

    {{Form::label('last_name', 'Last Name')}}
    {{Form::text('last_name')}}

    {{Form::label('email', 'Email')}}
    {{Form::email('email')}}

    {{Form::label('username', 'Username')}}
    {{Form::text('username')}}

    {{Form::label('password', 'Password')}}
    {{Form::password('password', ['class'=>'password','required'])}}

    {{Form::label('confirmpassword', 'Confirm Password')}}
    {{Form::password('password', ['class'=>'confirmpassword','required'])}}

<br>
<form>
  <button class="submit" action="submit" method="submit" onclick="return validation()">Sign up</button>
</form>
    <!-- {{Form::submit('Sign up')}} -->

    {{Form::close()}}
</article>
  </article>

</div>
<script type="text/javascript">

function validation()
{
  let password = document.querySelector('.password');
  let confirmpassword = document.querySelector('.confirmpassword');

  if(password.value != confirmpassword.value){
    alert("Password doesn't match");
    return false;
  }

  else{
    return true;
  }
}


</script>
</body>
</html>
