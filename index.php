<?php
	var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./public/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/login/vendor/bootstrap/css/bootstrap.min.css"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/login/vendor/animate/animate.css"/>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./public/login/vendor/css-hamburgers/hamburgers.min.css"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/login/vendor/animsition/css/animsition.min.css"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/login/vendor/select2/select2.min.css"/>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./public/login/vendor/daterangepicker/daterangepicker.css"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/login/css/util.css"/>
	<link rel="stylesheet" type="text/css" href="./public/login/css/main.css"/>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('public/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="home.php">

					<div class="wrap-input100 validate-input" data-validate = "Enter your email ">
						<input class="input100" type="text" name="email" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter your password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="LoginSubmit">
							Login
						</button>
					</div>

                    <div class="text-center" id="reg_link">
                        <a href="register.php" class="text-black">Pas de compte ? Inscrivez vous ici</a>
                    </div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="./public/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./public/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./public/login/vendor/bootstrap/js/popper.js"></script>
	<script src="./public/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./public/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./public/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="./public/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./public/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./public/login/js/main.js"></script>

</body>
</html>