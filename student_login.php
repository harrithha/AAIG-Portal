<!-- <!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Student Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head> -->

<!-- <body>
	<h1>Student Login </h1>
	<form action="student.php" method="post">
		Roll no : <input type="text" name="rollNo"><br><br>
		password : <input type="password" name="password"><br><br>
		<input type="submit" value="login">
	</form><br><br>
</body> -->

<!-- <body>
	<br><br><br>
	<h1 style="text-align:center"><b>Student Login</b></h1>
	<br><br><br>
	<br><br><br>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-4">
				<form action="student.php" method="post">
					<div class="form-group">
						<label for="Username">Roll no</label>
						<input type="text" name="rollNo" class="form-control" id="rollNo" placeholder="Roll Number">
					</div>
					<div class="form-group">
						<label for="Password">password</label>
						<input type="password" name="password" class="form-control" id="password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary" value="login">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Login</title>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="student_login_session.php">
					<span class="login100-form-title">
						Sign in
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter RollNumber">
						<input class="input100" type="text" name="rollNo" placeholder="Roll Number">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate="Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<br><br><br>
					<!-- <div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="login">
							Login as a Student
						</button>
					</div>
					<br><br><br><br><br>
					<!-- <div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up now
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>

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
	<script src="js/main.js"></script>

</body>

</html>