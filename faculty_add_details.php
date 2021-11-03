<?php
session_start();

if(!isset($_SESSION['logged_in_fac_id'])){
    echo '<script type="text/javascript"> location.href = "faculty_login.php" </script>';
}

else{

$id = $_SESSION['logged_in_fac_id'];
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM faculty WHERE id = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  // echo "Successful !" ;
   $p_roll = $row['id'];
   $p_name = $row['name'];
   $p_dept = $row['department'];
   $p_gender = $row['gender'];
   $p_age = $row['age'];
   $p_bg = $row['bloodGroup'];
   $p_phone = $row['phone'];
   $p_jd = $row['join_date'];
   $p_dob = $row['dob'];

  }
} 
$conn->close();	
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Student</title>
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
			<form class="contact100-form validate-form" action="faculty_add_details_to_db.php" method="post" enctype="multipart/form-data">
				<span class="contact100-form-title">
					EDIT DETAILS
				</span>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Roll Number">
					<span class="label-input100">ID</span>
					<input class="input100" type="number" name="RollNo" placeholder="Enter Your Roll Number" <?php echo "value='$p_roll'"; ?>>
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME</span>
					<input class="input100" type="text" <?php echo ($p_gender === 'male') ? 'checked' : '';?> name="name" placeholder="Enter Your Name" <?php echo "value='$p_name'"; ?>>
				</div>

				<div class="wrap-contact100-form-radio">
					<span class="label-input100">GENDER</span><br><br>
                <div class="r">
					<div class="contact100-form-radio">
						<input class="input-radio100" id="radio1" <?php echo ($p_gender === 'male') ? 'checked' : '';?> type="radio" name="gender" value="male">
						<label class="label-radio100" for="radio1">
							Male
						</label>
					</div>

					<div class="contact100-form-radio">
						<input class="input-radio100" <?php echo ($p_gender === 'female') ? 'checked' : '';?> id="radio2"  type="radio" name="gender" value="female">
						<label class="label-radio100" for="radio2">
							Female
						</label>
					</div>

					<div class="contact100-form-radio">
						<input class="input-radio100" id="radio3"  type="radio"  <?php echo ($p_gender === 'other') ? 'checked' : '';?> name="gender" value="other">
						<label class="label-radio100" for="radio3">
							Other
						</label>
					</div>
				</div>
			</div>

			<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Phone Number">
				<span class="label-input100">PHONE NUMBER</span>
				<input class="input100" type="phone" <?php echo "value='$p_phone'"; ?> name="Phone" placeholder="Enter Phone No.">
			</div>

			<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Blood Group">
				<span class="label-input100">BLOOD GROUP (Format : A+, O-, etc)</span>
				<input class="input100" type="text" name="blood_group" <?php echo "value='$p_bg'"; ?> placeholder="Enter Blood Group">
			</div>

			<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your DOB">
				<span class="label-input100">DATE OF BIRTH</span>
				<input class="input100" type="date" name="DOB" <?php echo "value='$p_dob'"; ?> placeholder="Enter DOB">
			</div>

	        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Age">
					<span class="label-input100">AGE</span>
					<input class="input100" type="number" name="Age" placeholder="Enter Age" <?php echo "value='$p_age'"; ?>>
			</div>

            <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your DOB">
				<span class="label-input100">JOINING DATE</span>
				<input class="input100" type="date" name="JD" <?php echo "value='$p_jd'"; ?> placeholder="Enter Join Date">
			</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">DEPARTMENT</span>
					<div>
						<select class="js-select2" name="Dept">
							<option value="CSE" <?php echo ($p_dept === 'CSE') ? 'selected' : '';?>>Computer Science and Engineering</option>
							<option value="EE" <?php echo ($p_dept === 'EE') ? 'selected' : '';?>>Electrical Engineering</option>
							<option value="MMAE" <?php echo ($p_dept === 'MMAE') ? 'selected' : '';?>>Mechanical, Materials and Aerospace Engineering</option>
							<option value="EP" <?php echo ($p_dept === 'EP') ? 'selected' : '';?>>Engineering Physics</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

                <div class="wrap-input100 validate-input bg1"> 
				<span class="label-input100">ADD PHOTO</span> <br>
				<input type="file" name="image" />
			    </div>


				<div class="container-login100-form-btn m-t-32">
					<button class="login100-form-btn">
						Edit Details
					</button>
				</div>
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
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js_add/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
