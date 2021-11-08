<?php
session_start();

if (!isset($_SESSION['logged_in_fac_id'])) {
  echo '<script type="text/javascript"> location.href = "faculty_login.php" </script>';
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$id = $_SESSION['logged_in_fac_id'];

?>

<?php include("sidebar_faculty.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ATTENDANCE</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images_add/icons/favicon.ico" />
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

</head>

<body>
  <div class="container-contact100" style="background-image: url('images_add/bg-01.jpg');">
    <div class="wrap-contact100">

      <h1 class="contact100-form-title">
        <center>COURSES</center>
      </h1>

      <table class="table table-hover">
        <thead class="table-dark" style="background-color: black;">
          <tr>
            <th scope="col">Course Name</th>
            <th scope="col">View Attendance</th>
          </tr>
        </thead>
        <tbody>

          <?php

          $sql = "SELECT * FROM list_of_courses WHERE instructor_id = '$id'";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["course_name"] . "</td>";

              echo '<td><form action="view_attendance.php" method="post"><button type="submit" class="btn btn-outline-primary" name="course" value="' . $row["course_name"] . '">VIEW</button></form></td></tr>';
            }
          }
          $conn->close();

          ?>

        </tbody>
      </table>

      <form action="faculty.php" method="post">
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
    $(".js-select2").each(function() {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });


      $(".js-select2").each(function() {
        $(this).on('select2:close', function(e) {
          if ($(this).val() == "Please chooses") {
            $('.js-show-service').slideUp();
          } else {
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
      start: [1500, 3900],
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

    filterBar.noUiSlider.on('update', function(values, handle) {
      skipValues[handle].innerHTML = Math.round(values[handle]);
      $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
      $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
    });
  </script>



</body>

</html>