<!DOCTYPE html>
<html lang="en"> 
<head>
  <title>Login </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg2.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          Account Login
        </span>
        <form class="login100-form validate-form p-b-33 p-t-5" action="{{ route('login') }}" method="POST">

           {{csrf_field()}}
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="email" name="email" placeholder="Email">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="container-login100-form-btn m-t-32">
            <button type="submit" class="login100-form-btn">
              Login
            </button>
          </div>

          

           <div class="container-login100-form-btn m-t-32">
           <a href="/tampilan" class="login100-form-btn" >
                 Back
            </a>
          </div>

          <div>
            <center>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
            @endif
          </center>
          </div>

          <div>
            <center>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('register') }}">
              {{ __('Create Account') }}
            </a>
            @endif
          </center>
          </div>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/login.js"></script>

</body>
</html>