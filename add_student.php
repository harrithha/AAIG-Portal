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
			<form class="contact100-form validate-form" action="add_students_to_db.php" method="post">
				<span class="contact100-form-title">
					ADD DETAILS
				</span>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Roll Number">
					<span class="label-input100">ROLL NUMBER</span>
					<input class="input100" type="number" name="RollNo" placeholder="Enter Your Roll Number">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Password">
					<span class="label-input100">PASSWORD</span>
					<input class="input100" type="password" name="pass" placeholder="Enter Your Password">
				</div>

				<div class="wrap-contact100-form-radio">
					<span class="label-input100">GENDER</span><br><br>
                <div class="r">
					<div class="contact100-form-radio">
						<input class="input-radio100" id="radio1" type="radio" name="gender" value="male">
						<label class="label-radio100" for="radio1">
							Male
						</label>
					</div>

					<div class="contact100-form-radio">
						<input class="input-radio100" id="radio2"  type="radio" name="gender" value="female">
						<label class="label-radio100" for="radio2">
							Female
						</label>
					</div>

					<div class="contact100-form-radio">
						<input class="input-radio100" id="radio3"  type="radio" name="gender" value="other">
						<label class="label-radio100" for="radio3">
							Other
						</label>
					</div>
				</div>
			</div>

			<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Phone Number">
				<span class="label-input100">PHONE NUMBER</span>
				<input class="input100" type="phone" name="Phone" placeholder="Enter Phone No.">
			</div>

			<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Blood Group">
				<span class="label-input100">BLOOD GROUP (Format : A+, O-, etc)</span>
				<input class="input100" type="text" name="blood_group" placeholder="Enter Blood Group">
			</div>

			<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your DOB">
				<span class="label-input100">DATE OF BIRTH</span>
				<input class="input100" type="date" name="DOB" placeholder="Enter DOB">
			</div>

	        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Age">
					<span class="label-input100">AGE</span>
					<input class="input100" type="number" name="Age" placeholder="Enter Age">
			</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">PROGRAM</span>
					<div>
						<select class="js-select2" name="Program">
							<option value="B.Tech" selected>B.Tech</option>
							<option value="MS">MS</option>
							<option value="PhD">PhD</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">BRANCH</span>
					<div>
						<select class="js-select2" name="Branch">
							<option value="CSE" selected>Computer Science and Engineering</option>
							<option value="EE">Electrical Engineering</option>
							<option value="MMAE">Mechanical, Materials and Aerospace Engineering</option>
							<option value="EP">Engineering Physics</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Passing Out Year">
					<span class="label-input100">PASSING OUT YEAR</span>
					<input class="input100" type="number" name="Passing_Year" placeholder="Enter Passing Year">
			</div>

			<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number of courses you have taken">
				<span class="label-input100">NUMBER OF COURSES</span>
				<input class="input100" type="number" name="No_of_courses" placeholder="No. of courses taken">
			</div>

			<div class="wrap-contact100-form-radio">
				<span class="label-input100">LIST OF COURSES</span><br><br>
			<div class="r">
				<div class="contact100-form-radio">
					<input  class = "in" id="checkbox1"  type="checkbox" name="course[]" value="MA_101">
					<label class="label" for="checkbox1">
						MA 101
					</label>
				</div>

				<div class="contact100-form-radio">
					<input  class = "in" id="checkbox2"  type="checkbox" name="course[]" value="BB_101">
					<label  class="label" for="checkbox2">
						BB 101
					</label>
				</div>

				<div class="contact100-form-radio">
					<input class = "in" id="checkbox3"  type="checkbox" name="course[]" value="PH_101">
					<label class="label" for="checkbox3">
						PH 101
					</label>
				</div>
			</div>
		</div>
				<div class="container-login100-form-btn m-t-32">
					<button class="login100-form-btn">
						Login
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
