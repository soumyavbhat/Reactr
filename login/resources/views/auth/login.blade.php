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
    <div id="login-side">
      <h1>WELCOME</h1>
        <div id="content-con">
          <article class="post" >

            <form  method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
            <label for="username" >Username</label>

                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

          <label>Password</label>
          <input type="password" name="password">
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
          <!-- <p>forgot your password?</p> -->
          <a href="#">forgot your password?</a>
          <div id="border-line"></div>
          <a id="new-account" href="#">create a new account</a>
          <!-- <p id="new-account">create a new account </p> -->
        </div>
      </div>
    </div>


 <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
