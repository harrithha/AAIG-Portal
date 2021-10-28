<?php

session_start();
$id = $_SESSION['logged_in__stu_roll'];

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM student WHERE rollNo = '$id'";
$result = $conn->query($sql);
$MA101 = 0;
$PH101 = 0;
$BB101 = 0;
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
   $p_age = $row['age'];
   $p_bg = $row['bloodGroup'];
   $p_passing_year = $row['passingYear'];
   $p_programme = $row['programme'];
   $p_phone = $row['phone'];
   $p_dob = $row['dob'];

  }
} else {
 // echo "0 results";
}
$conn->close();




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Student</title>
</head>
<body>
<div class="edit_details">
<form action="edit_student_to_db.php" method="post">
  <div class="form-group">
    <label for="RollNo">Roll Number</label>
    <?php echo"<input type='number' class='form-control'  name='RollNo' placeholder='Enter Roll Number' value='$p_roll'"; ?>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <?php echo"<input type='text' class='form-control' name='name' placeholder='Enter Name' value='$p_name'>"; ?>
  </div>
  <div class="form-group">
    <label for="No_of_courses">Number of courses taken</label>
    <?php echo"<input type='number' class='form-control' name='No_of_courses' placeholder='No. of courses taken' value='$p_no_of_courses'>"; ?>
  </div>
  <div class="form-group">
  <label for="List_of_Courses">List of courses taken</label> <hr>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" <?php echo ($MA101 === 1) ? 'checked' : '';?> value="MA_101" name="course[]">
  <label class="form-check-label" for="MA_101">
    MA 101
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" <?php echo ($BB101 === 1) ? 'checked' : '';?> value="BB_101" name="course[]">
  <label class="form-check-label" for="BB_101">
    BB 101
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" <?php echo ($PH101 === 1) ? 'checked' : '';?> value="PH_101" name="course[]">
  <label class="form-check-label" for="PH_101">
    PH 101
  </label>
  </div>
  </div>
  <div class="form-group">
    <label for="Age">Age</label>
   <?php echo"<input type='number' class='form-control' name='Age' placeholder='Enter Age' value='$p_age'>"; ?>
  </div>
  <div class="form-group">
    <label for="blood_group">Blood Group</label>
    <?php echo"<input type='text' class='form-control' name='blood_group' placeholder='Enter Blood Group' value='$p_bg'>"; ?>
  </div>
  <div class="form-group">
    <label for="Branch">Branch</label>
    <?php echo"<input type='text' class='form-control' name='Branch' placeholder='Enter Branch' value='$p_branch'>"; ?>
  </div>
  <div class="form-group">
    <label for="Passing_Year">Passing Year</label>
    <?php echo"<input type='number' class='form-control' name='Passing_Year' placeholder='Enter Passing Year' value='$p_passing_year'>"; ?>
  </div>
  <div class="form-group">
    <label for="Program">Program</label>
    <?php echo"<input type='text' class='form-control' name='Program' placeholder='Enter Program' value='$p_programme'>"; ?>
  </div>
  <div class="form-group">
    <label for="Phone">Phone No.</label>
    <?php echo"<input type='phone' class='form-control' name='Phone' placeholder='Enter Phone No.' value='$p_phone'>"; ?>
  </div>
  <div class="form-group">
    <label for="DOB">Date of Birth</label>
    <?php echo"<input type='date' class='form-control' name='DOB' placeholder='Enter DOB' value='$p_dob'>"; ?>
  </div>

  
  <button type="submit" class="btn btn-primary">Edit Details</button>
</form>
</div>
</body>
</html>