<?php 
session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$rollno = $_POST['roll'];

$sql = "SELECT * FROM student where rollNo ='$rollno'";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Student</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <table class = "table table-hover"><thead class="table-dark"><tr><th scope="col"></th><th scope="col">STUDENT DETAILS</th></tr></thead><tbody>

    <?php

       $row = $result->fetch_assoc();
        echo "<tr><td>ROLL NO</td><td>".$row["rollNo"]."</td>";
        echo "<tr><td>NAME</td><td>".$row["name"]."</td>";
        echo "<tr><td>NO OF COURSES</td><td>".$row["noOfCourses"]."</td>";
        echo "<tr><td>LIST OF COURSES</td><td>".$row["listOfCourses"]."</td>";
        echo "<tr><td>AGE</td><td>".$row["age"]."</td>";
        echo "<tr><td>GENDER</td><td>".$row["gender"]."</td>";
        echo "<tr><td>BLOOD GROUP</td><td>".$row["bloodGroup"]."</td>";
        echo "<tr><td>BRANCH</td><td>".$row["branch"]."</td>";
        echo "<tr><td>PASSING YEAR</td><td>".$row["passingYear"]."</td>";
        echo "<tr><td>PROGRAMME</td><td>".$row["programme"]."</td>";
        echo "<tr><td>PHONE</td><td>".$row["phone"]."</td>";
        echo "<tr><td>DOB</td><td>".$row["dob"]."</td>";
    ?>

    </tbody></table>
    
    <form action="view_student_detail.php" method="post"> 
    	<center><button type="submit" class="btn btn-dark">BACK</button></center>
    </form>

</body>
</html>