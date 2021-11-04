<?php

session_start();

if(!isset($_SESSION['logged_in__admin_name'])){
    echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);
$conn->close();




?>
<?php include("sidebar_admin.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>VIEW ATTENDANCE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images_add/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_add/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_add/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_add/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_add/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_add/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_add/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_add/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_add/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_add/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css_add/util.css">
	<link rel="stylesheet" type="text/css" href="css_add/main.css">
<!--===============================================================================================-->

</head>
<body>


	<div class="container-contact100" style="background-image: url('images_add/bg-01.jpg');">
		<div class="wrap-contact100" >
			<h1 class="contact100-form-title">VIEW ATTENDANCE</h1>
		<div class="container p-3 my-3 border">
			<form action="course_wise_attendance.php" method="post">
				<h3><center>Course wise</center></h3><br>

				<center><button type="submit" value="course" class="btn btn-outline-primary" name="course">VIEW</button></center>
			</form>
		</div><br>
        <div class="container p-3 my-3 border">
			<form action="roll_wise_attendance.php" method="post">
				<h3><center>Student</center></h3><br>
				<center><button type="submit" value="roll" class="btn btn-outline-primary" name="rollNo">VIEW</button></center>
			</form>
		</div>
  <br><br>

    <form action="admin.php" method="post"> 
      <center><button type="submit" class="btn btn-outline-dark">BACK</button></center>
    </form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor_add/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_add/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_add/bootstrap/js/popper.js"></script>
	<script src="vendor_add/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_add/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor_add/daterangepicker/moment.min.js"></script>
	<script src="vendor_add/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor_add/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor_add/noui/nouislider.min.js"></script>
<!--===============================================================================================-->
	<script src="js_add/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>
</html>

