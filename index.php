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


$sql = "CREATE TABLE admin (
username VARCHAR(50) PRIMARY KEY ,
password VARCHAR(20) 
)";

$conn->query($sql);


$sql = "CREATE TABLE student (
rollNo INT PRIMARY KEY ,
name VARCHAR(50) ,
password VARCHAR(20) NOT NULL ,
noOfCourses INT ,
listOfCourses VARCHAR(50),
age INT ,
gender VARCHAR(10),
bloodGroup VARCHAR(20),
branch VARCHAR(50),
passingYear INT,
programme VARCHAR(50),
phone  VARCHAR(20),
dob DATE)";

$conn->query($sql);


$sql = "CREATE TABLE faculty (
id INT PRIMARY KEY ,
name VARCHAR(50) ,
password VARCHAR(20) ,
age INT ,
gender VARCHAR(10),
bloodGroup VARCHAR(20),
department VARCHAR(50),
join_date DATE,
phone  VARCHAR(20),
dob DATE)";


$conn->query($sql);

$sql = "CREATE TABLE list_of_courses (
    course_name VARCHAR(100),
    instructor_id INT)";
    
    $conn->query($sql);

$conn->close();

?>


<!DOCTYPE html>
<html lang=en>


<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <div class="m-4">
        <nav class="nav nav-pills nav-justified">
            <a href="index.php" class="nav-item nav-link proactive">
                <i class="bi-house-door"></i> HOME
            </a>
            <a href="student_login.php" class="nav-item nav-link ">
                <i class="bi-person"></i> STUDENT
            </a>
            <a href="faculty_login.php" class="nav-item nav-link ">
                <i class="bi-person"></i> FACULTY
            </a>
            <a href="admin_login.php" class="nav-item nav-link ">
                <i class="bi-person"></i> ADMIN
            </a>
        </nav>
    </div>

</body>

</html>

</html>