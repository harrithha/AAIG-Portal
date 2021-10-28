<?php
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
$blood_grp = $_POST['blood_group'];
$branch = $_POST['Branch'];
$passing_year = $_POST['Passing_Year'];
$program = $_POST['Program'];
$ph_no = $_POST['Phone'];
$DOB = $_POST['DOB'];
$list_of_courses = substr($list_of_c, 0, -1);

$sql = "INSERT INTO student (rollNo, name, password, noOfCourses, listOfCourses, age, bloodGroup, branch, 
passingYear, programme, phone, dob) VALUES ('$roll','$name', '$password','$no_of_courses','$list_of_courses','$age',
'$blood_grp','$branch','$passing_year','$program','$ph_no','$DOB')";

if ($conn->query($sql) === TRUE) {
 // echo 'New record created successfully';
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




?>
