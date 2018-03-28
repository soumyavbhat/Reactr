<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Info Login</title>

 <script src="{{asset('js/vue.min.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.27/vue.js"></script>
 <link href="{{asset('_css/reset.css')}}" rel="stylesheet" media="screen, projection">
<link href="{{asset('_css/main.css')}}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">

</head>
<body>

  <div id="container">
    <div id="login-side">
      <div id="login-content-con">
      <h1>WELCOME</h1>
        <div id="content-con">
          <article class="post" >

          <label>Username</label>
          {{Form::open(array('url'=>'loginfill'))}}
          <input type="text" name="username" value="">

          <label>Password</label>
          <input type="password" name="password">
          </article>
          <button><h2>login</h2></button>
        </div>
    </div>
  </div>


    <div id="title-side">
      <div id="title-content-con">
          <h1>REACTR</h1>
          <h2>Information System</h2>

        <div id="password-account">
          <!-- <p>forgot your password?</p> -->
          <a href="#">forgot your password?</a>
          <div id="border-line"></div>
          <a id="new-account" href="#">create a new account</a>
          <!-- <p id="new-account">create a new account </p> -->
        </div>
      </div>
    </div>
</div>

 <!-- <script src="{{asset('js/main.js')}}"></script> -->
</body>
</html>



<!--
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Info Login</title>

 <script src="{{asset('js/vue.min.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.27/vue.js"></script>
 <link href="{{asset('_css/reset.css')}}" rel="stylesheet" media="screen, projection">
<link href="{{asset('_css/main.css')}}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</script>
</head>
<body>


<div id="container">
    <div id="login-slide">
      <h1>WELCOME</h1>
      <div id="content-con">
 <article class="post">
   <form  method="POST" action="{{ route('login') }}">
       {{ csrf_field() }}

           <label for="username" >Username</label>

               <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

               <label>Passoword</label>
               <input type="password" name="password">
             </form>
 </article>
 <button><h2>login</h2></button>
      </div>
</div>

<div id="title-side">
    <div>
      <h1>REACTR</h1>
      <h2>Information System</h2>
    <div>

    <div id="password-account">
                                <a  href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                <div id="border-line"></div>
                                <a id="new-account" href="#">create a new account</a>
                          </div>
                            </div>
                          </div>
</div>
                           <script src="{{asset('js/main.js')}}"></script>
                          </body>
                          </html> -->
