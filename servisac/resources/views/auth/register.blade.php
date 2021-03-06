@extends('layouts.app')

@section('content')


<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="form/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/css/utile.css">
	<link rel="stylesheet" type="text/css" href="form/css/contact.css">
<!--===============================================================================================-->
</head>
<body>




		
		<div class="container-contact100">

	
			<form class="contact100-form validate-form" action="{{ route('register') }}" method="POST" >

				 {{csrf_field()}}

				<span class="contact100-form-title">
					Register
				</span>

				<div class="wrap-input100 validate-input" data-validate="Nama harus di isi!!">
					<span class="label-input100">Nama</span>
					<input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
					{{-- <span class="focus-input100"></span> --}}
				</div>

				<div class="wrap-input100 validate-input" data-validate="Nama harus di isi!!">
					<span class="label-input100">Email </span>
					<input id="email" type="email" placeholder="Email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
					
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate=" Harus di isi!!">
					<span class="label-input100">Password</span>
					<input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="new-password">
					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate=" Harus di isi!!">
					<span class="label-input100">Password confirm</span>
					<input id="password-confirm" class="input100" type="password" name="password_confirmation" placeholder="Password confirm" required autocomplete="new-password">
					<span class="focus-input100"></span>
				</div>
	
				
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button type="submit" class="contact100-form-btn">
							Send
						</button>
					</div>
				</div>


			</form>

			<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a href="/tampilan" class="contact100-form-btn" >
							Back
						</a>
					</div>
				</div>
          </div>
		</div>
	</div>



	
	 <section class="ftco-section bg-light">
        <div class="container">
        </div>
    </section>


<!--===============================================================================================-->
	<script src="form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="form/vendor/bootstrap/js/popper.js"></script>
	<script src="form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="form/vendor/daterangepicker/moment.min.js"></script>
	<script src="form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="form/https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="form/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/contact.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="form/https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>


@endsection
