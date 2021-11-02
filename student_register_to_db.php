<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);
$roll = $_SESSION['logged_in__stu_roll'];
$list_of_c = '';
$len = 0; //Length of courses
if(!empty($_POST['course'])) {

    foreach($_POST['course'] as $value){
      $len+=1;
        $list_of_c .= "$value," ;
    }

}

$no_of_courses = $len;
$list_of_courses = substr($list_of_c, 0, -1);


$sql = "UPDATE student SET noOfCourses=$no_of_courses, 
listOfCourses='$list_of_courses' WHERE rollNo=$roll";

if ($conn->query($sql) === TRUE) {
  echo "<script type='text/javascript'>alert('Courses Registered Successfully !'); </script>";
  echo '<script type="text/javascript"> location.href = "student.php" </script>';
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
</html>
