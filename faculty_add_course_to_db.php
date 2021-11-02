<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$fac = $_SESSION['logged_in_fac_id'];
$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE hac";

$conn->query($sql);

$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$course_name = $_POST['cname'];
$date = $course_name."date";
$sql = "SELECT * FROM list_of_courses WHERE course_name = '$course_name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<script type='text/javascript'>alert('Course Already Exists! !'); </script>";
  echo '<script type="text/javascript"> location.href = "faculty_add_course.php" </script>';
  exit();
}
$sql = "INSERT INTO list_of_courses (course_name, instructor_id) VALUES ('$course_name','$fac')";

if ($conn->query($sql) === TRUE) {
    $sql = "CREATE TABLE $course_name". '(
    rollNo INT PRIMARY KEY ,
    name VARCHAR(50) ,
    attendance VARCHAR(21844))';
    if ($conn->query($sql) === TRUE){
        $sql = "CREATE TABLE $date".'(
        date VARCHAR(50))';
        if ($conn->query($sql) === TRUE){
            echo "<script type='text/javascript'>alert('New Course created successfully !'); </script>";
            echo '<script type="text/javascript"> location.href = "faculty.php" </script>';
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
       }
    else{
         echo "Error: " . $sql . "<br>" . $conn->error;
    } 
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