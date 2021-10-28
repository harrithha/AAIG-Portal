<?php

session_start();
$id = $_SESSION['logged_in__stu_roll'];

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
$blood_grp = $_POST['blood_group'];
$branch = $_POST['Branch'];
$passing_year = $_POST['Passing_Year'];
$program = $_POST['Program'];
$ph_no = $_POST['Phone'];
$DOB = $_POST['DOB'];
$list_of_courses = substr($list_of_c, 0, -1);

$sql = "UPDATE student SET name='$name', noOfCourses=$no_of_courses, 
listOfCourses='$list_of_courses', age=$age, bloodGroup='$blood_grp', branch='$branch', 
passingYear=$passing_year, programme='$program', phone='$ph_no', dob='$DOB' WHERE 
rollNo=$roll";

if ($conn->query($sql) === TRUE) {
  echo 'Updated record successfully';
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
