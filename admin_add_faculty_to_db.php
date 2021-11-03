<?php
session_start();

if(!isset($_SESSION['logged_in__admin_name'])){
    echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
}
else{

$host = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE hac";

$conn->query($sql);

$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$roll = $_POST['RollNo'];
$name = $_POST['name'];
$password = $_POST['pass'];

//Validity Checks for each input

// 1. Roll Number
$sql = "SELECT * FROM faculty WHERE id = '$roll'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<script type='text/javascript'>alert('Duplicate Entry of Primary Key !'); </script>";
  echo '<script type="text/javascript"> location.href = "admin_add_faculty.php" </script>';
  exit();
}

//2. Password
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
  echo "<script type='text/javascript'>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character !'); </script>";
  echo '<script type="text/javascript"> location.href = "admin_add_faculty.php" </script>';
  exit();
}


$sql = "INSERT INTO faculty (id, name, password, age, gender,
bloodGroup, department, join_date, phone, dob) VALUES ('$roll','$name', '$password',NULL,'','','',NULL,'',NULL)";

if ($conn->query($sql) === TRUE) {
  echo "<script type='text/javascript'>alert('New Record Created Successfully !'); </script>";
  echo '<script type="text/javascript"> location.href = "admin.php" </script>';
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
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