<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHI Reg</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Register/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Register/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Register/css/util.css">
	<link rel="stylesheet" type="text/css" href="Register/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" ">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<span class="login100-form-title p-b-37">
				Register PHI
			</span>
			<div class="row">
				<div class="col-md-6">
					<form class="login100-form validate-form" method="post" action="CreatePHI">
			
						<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Name">
							<input class="input100" type="text" name="name" placeholder="Name" required>
							<span class="focus-input100"></span>
						</div>
		
						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100" type="text" placeholder="NIC" name="nic" required/>
							<span class="focus-input100"></span>
						  </div>
						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100" type="text" placeholder="PHI ID" name="phi_id"/>
							<span class="focus-input100"></span>
						  </div>
						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100" type="text" placeholder="Contact" name="contact" required/>
							<span class="focus-input100"></span>
						  </div>
						  <div class="wrap-input100 validate-input m-b-20">
							
							<input class="input100" type="text" placeholder="Region" name="region" required/>
							<span class="focus-input100"></span>
						  </div>

						  <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
							<input class="input100" type="email" name="email" placeholder="Email" required>
							<span class="focus-input100"></span>
						</div>

						  <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
							<input class="input100" type="password" name="password" placeholder="Password" minlength="8" required>
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-25" data-validate = "Confirm password">
							<input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" minlength="8" required>
							<span class="focus-input100"></span>
						</div>
						<input type="hidden" name="category" value="PHI">
		
		<br>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit">
								Register
							</button>
						</div>
		
						<div class="text-center p-t-57 p-b-20">
						
						</div>
					</form>
		
				</div>
				<div class="col-3">
					<img class="phiimg" src="Register/images/register.svg"alt="">
				</div>
			</div>
			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="Register/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/bootstrap/js/popper.js"></script>
	<script src="Register/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/daterangepicker/moment.min.js"></script>
	<script src="Register/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Register/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Register/js/main.js"></script>

</body>
</html>