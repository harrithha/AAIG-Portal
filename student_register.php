<?php
session_start();
if(!isset($_SESSION['logged_in__stu_roll'] )){
    echo '<script type="text/javascript"> location.href = "student_login.php" </script>';
} 

else{

	$id = $_SESSION['logged_in__stu_roll'];
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM student WHERE rollNo = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  // echo "Successful !" ;
   $p_roll = $row['rollNo'];
   $p_name = $row['name'];
   $p_branch = $row['branch'];
   $p_no_of_courses = $row['noOfCourses'];
   $p = $row['listOfCourses'];
   $p_list_of_courses = explode(",",$p);
   foreach ($p_list_of_courses as $course) {
    if($course == 'MA_101')
      $MA101 = 1;
    elseif($course == 'PH_101')
      $PH101 = 1;
    elseif($course == 'BB_101')
      $BB101 = 1;
  }
   $p_gender = $row['gender'];
   $p_age = $row['age'];
   $p_bg = $row['bloodGroup'];
   $p_passing_year = $row['passingYear'];
   $p_programme = $row['programme'];
   $p_phone = $row['phone'];
   $p_dob = $row['dob'];

  }
} 

}

?>
<?php include("sidebar_student.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>REGISTER FOR COURSE</title>
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
			<form class="contact100-form validate-form" action="student_register_to_db.php" method="post">
				<span class="contact100-form-title">
					REGISTER FOR A COURSE
				</span>

			<div class="wrap-contact100-form-radio">
				<span class="label-input100">LIST OF COURSES</span><br><br>
			<div class="r">
                <?php
                $sql = "SELECT * FROM list_of_courses";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $c = $row['course_name'];

                  // echo "Successful !" ;
                  if(in_array($c, $p_list_of_courses))
				  {
					  echo "<div class='contact100-form-radio'>
                  <input class = 'in' id='checkbox1' checked type='checkbox' name='course[]' value='$c'>
                  <label class='label' for='checkbox1'>
                      $c
                  </label>
                  </div>";
					  $yes = 1;
				  }
				  else
				  {
					echo "<div class='contact100-form-radio'>
					<input class = 'in' id='checkbox1' type='checkbox' name='course[]' value='$c'>
					<label class='label' for='checkbox1'>
						$c
					</label>
					</div>";
				  }
                
                }
            }
            $conn->close();
                ?>
			</div>
		</div>
				<div class="container-login100-form-btn m-t-32">
					<button class="login100-form-btn">
						REGISTER FOR ABOVE SELECTED COURSES
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
