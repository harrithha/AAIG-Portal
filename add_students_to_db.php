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
$len = 0; //Length of courses
if(!empty($_POST['course'])) {
    foreach($_POST['course'] as $value){
        $len+=1;
        $list_of_c .= "$value," ;
    }
}
$_POST['No_of_courses'] = $len;
$age = $_POST['Age'];
$gender = $_POST['gender'];
$blood_grp = $_POST['blood_group'];
$branch = $_POST['Branch'];
$passing_year = $_POST['Passing_Year'];
$program = $_POST['Program'];
$ph_no = $_POST['Phone'];
$DOB = $_POST['DOB'];
$list_of_courses = substr($list_of_c, 0, -1);

//Validity Checks for each input

// 1. Roll Number
$sql = "SELECT * FROM student WHERE rollNo = '$roll'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<script type='text/javascript'>alert('Duplicate Entry of Primary Key !'); </script>";
  echo '<script type="text/javascript"> location.href = "add_student.php" </script>';
  exit();
}

//2. Password
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) 
{
    echo "<script type='text/javascript'>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character !'); </script>";
    echo '<script type="text/javascript"> location.href = "add_student.php" </script>';
    exit();
}


//3. No. of courses
if($len != $no_of_courses)
{
    echo "<script type='text/javascript'>alert('Your number of courses entered doesn't match with the list of courses you have selected !
    You have selected $len of courses from the list! Go back to edit it if needed !'); </script>";
    echo '<script type="text/javascript"> location.href = "add_student.php" </script>';
    exit();
}

//4. Age
$today = date("Y-m-d");
$diff = date_diff(date_create($DOB), date_create($today));
$age_actual = $diff->format('%y');
echo 'Age is '.$age_actual;
if($age_actual != $age)
{
    echo "<script type='text/javascript'>alert('Your age entered doesn't match according to the DOB you have selected !'); </script>";
    echo '<script type="text/javascript"> location.href = "add_student.php" </script>';
    exit();
}
//5. Blood Group
$available_bgs = array("A+", "A-", "B+", "B-","AB+", "AB-", "O+", "O-");
if (!in_array($blood_grp, $available_bgs)) {
    echo "<script type='text/javascript'>alert('Enter blood group in correct format'); </script>";
    echo '<script type="text/javascript"> location.href = "add_student.php" </script>';
    exit();
}
//8. Passing Year
$year = date("Y");

if ($passing_year > $year + 5 || $passing_year < $year - 5) {
    echo "<script type='text/javascript'>alert('Please fill corect passing out year !'); </script>";
    echo '<script type="text/javascript"> location.href = "add_student.php" </script>';
    exit();
}

//9. Phone Number
$filtered_phone_number = filter_var($ph_no, FILTER_SANITIZE_NUMBER_INT);
$phone_to_check = str_replace("-", "", $filtered_phone_number);
if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
    echo "<script type='text/javascript'>alert('Enter correct format of phone number ex. +91 XXXXXXXXXX'); </script>";
    echo '<script type="text/javascript"> location.href = "add_student.php" </script>';
    exit();
} 



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