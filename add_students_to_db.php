<?php
session_start();

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
$no_of_courses = $_POST['No_of_courses'];
$list_of_c = '';

if(!empty($_POST['course'])) {
    foreach($_POST['course'] as $value){
        $list_of_c .= "$value," ;
    }
}

$age = $_POST['Age'];
$gender = $_POST['gender'];
$blood_grp = $_POST['blood_group'];
$branch = $_POST['Branch'];
$passing_year = $_POST['Passing_Year'];
$program = $_POST['Program'];
$ph_no = $_POST['Phone'];
$DOB = $_POST['DOB'];
$list_of_courses = substr($list_of_c, 0, -1);

$sql = "INSERT INTO student (rollNo, name, password, noOfCourses, listOfCourses, age, gender, bloodGroup, branch, 
passingYear, programme, phone, dob) VALUES ('$roll','$name', '$password','$no_of_courses','$list_of_courses','$age', '$gender' ,
'$blood_grp','$branch','$passing_year','$program','$ph_no','$DOB')";

if ($conn->query($sql) === TRUE) {
   echo 'New record created successfully';
   echo '<form action="admin.php" method="post"><center><button type="submit" class="btn btn-dark">BACK</button></center></form>';
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