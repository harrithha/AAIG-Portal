<?php

session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$roll = $_POST['RollNo'];
$name = $_POST['name'];
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

$sql = "UPDATE student SET name='$name', noOfCourses=$no_of_courses, 
listOfCourses='$list_of_courses', age=$age, gender='$gender', bloodGroup='$blood_grp', branch='$branch', 
passingYear=$passing_year, programme='$program', phone='$ph_no', dob='$DOB' WHERE 
rollNo=$roll";

if ($conn->query($sql) === TRUE) {
  echo 'Updated record successfully';
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
