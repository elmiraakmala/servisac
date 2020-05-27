@extends('whisper.master')

@section('isi')


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

<br>
<br>

<br>
<br>

<br>
<br>

	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		
		

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="{{route('datamodel.store')}}" method="POST" >

				 {{csrf_field()}}

				<span class="contact100-form-title">
					Register
				</span>

				<div class="wrap-input100 validate-input" data-validate="Nama harus di isi!!">
					<span class="label-input100">Nama</span>
					<input class="input100" type="text" name="namacustomer" placeholder="Nama Lengkap">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Jenis kelamin Harus di isi!!">
					<span class="label-input100">Jenis Kelamin</span>
					<br>
					<select name="gender"  class="input100" id="exampleFormControlSelect1">
	                  <option value="L">---Pilih Jenis Kelamin---</option>
	                  <option value="L">Laki-Laki</option>
	                  <option value="P">Perempuan</option>
	                </select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Alamat harus di isi!!">
					<span class="label-input100">Alamat</span>
					<textarea class="input100" name="alamat" placeholder="Alamat Lengkap"></textarea>
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 validate-input" data-validate="Kota harus di isi!!">
					<span class="label-input100">Kota</span>
					<input class="input100" type="text" name="kota" placeholder="Kota">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Nomor Handphone harus di isi!!">
					<span class="label-input100">Nomor Handphone</span>
					<input class="input100" type="number" name="hp" placeholder="Nomor Handphone">
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
