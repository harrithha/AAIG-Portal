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
// $list_of_c = $_POST['course'];
// $each = explode(",", $list_of_c);
// $length = count($each);
// if ($length == 1)
// {
//     $list_of_courses = $each[0];
// }
// else
// {
//     $list_of_courses = substr($list_of_c, 0, -1);
// }
$age = $_POST['Age'];
$gender = $_POST['gender'];
$blood_grp = $_POST['blood_group'];
$dept = $_POST['Dept'];
$jd = $_POST['JD'];
$ph_no = $_POST['Phone'];
$DOB = $_POST['DOB'];


//Validity Checks for each input

// Age
$today = date("Y-m-d");
$diff = date_diff(date_create($DOB), date_create($today));
$age_actual = $diff->format('%y');
if($age_actual != $age)
{
  echo "<script type='text/javascript'>alert('Enter correct age according to DOB!'); </script>";
    echo '<script type="text/javascript"> location.href = "admin_edit_faculty_home.php" </script>';
  exit();
}
// Blood Group
$available_bgs = array("A+", "A-", "B+", "B-","AB+", "AB-", "O+", "O-");
if (!in_array($blood_grp, $available_bgs)) {
    echo "<script type='text/javascript'>alert('Enter blood group in correct format'); </script>";
    echo '<script type="text/javascript"> location.href = "admin_edit_faculty_home.php" </script>';
    exit();
}
// Phone Number
$filtered_phone_number = filter_var($ph_no, FILTER_SANITIZE_NUMBER_INT);
$phone_to_check = str_replace("-", "", $filtered_phone_number);
if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
    echo "<script type='text/javascript'>alert('Enter correct format of phone number ex. +91 XXXXXXXXXX'); </script>";
    echo '<script type="text/javascript"> location.href = "admin_edit_faculty_home.php" </script>';
    exit();
} 


$sql = "UPDATE faculty SET name='$name', noOfCourses=$no_of_courses, age=$age, gender='$gender', bloodGroup='$blood_grp', 
department='$dept', join_date='$jd', phone='$ph_no', dob='$DOB' WHERE 
id=$roll";

if ($conn->query($sql) === TRUE) {
  echo "<script type='text/javascript'>alert('Updated Record Successfully !'); </script>";
  echo '<script type="text/javascript"> location.href = "admin.php" </script>';
} 
else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
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
