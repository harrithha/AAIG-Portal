<?php 
session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$gender = $_POST['gender'];
$course = $_POST['course'];

if ($gender == "all" && $course == "all"){
	echo '<script type="text/javascript"> location.href = "view_student_detail.php" </script>';
}

else if ($course == "all"){
    $sql = "SELECT * FROM student where ";

    $result = $conn->query($sql);
}

?>