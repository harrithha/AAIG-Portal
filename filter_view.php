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
    $sql = "SELECT * FROM student where gender = '$gender'";
    
    $result = $conn->query($sql);


    echo '<table class = "table table-hover"><thead class="table-dark"><tr><th scope="col">Roll no </th><th scope="col">Name </th><th scope="col">View Details</th></tr></thead><tbody>';

    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["rollNo"]. "</td><td> ".$row["name"]. "</td>";

        echo '<td><form action="student_detail.php" method="post"><button type="submit" class="btn btn-outline-primary" name="roll" value="'.$row["rollNo"].'">VIEW</button></form></td></tr>';
        }
    }
    
}

else if ($gender == "all"){
    
    $sql = "SELECT * FROM student ";
    $result = $conn->query($sql);
    echo "<h3><center>".$course."</center></h3>";
    echo '<table class = "table table-hover"><thead class="table-dark"><tr><th scope="col">Roll no </th><th scope="col">Name </th><th scope="col">View Details</th></tr></thead><tbody>';

    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
            $x = 0;
            $str_arr = explode (",", $row['listOfCourses']);
            foreach($str_arr as $value){
                if ($value == $course){
                    $x = 1;
                }
           }

        if ($x == 1){

            $x = 0;
    
        echo "<tr><td>" . $row["rollNo"]. "</td><td> ".$row["name"]. "</td>";

        echo '<td><form action="student_detail.php" method="post"><button type="submit" class="btn btn-outline-primary" name="roll" value="'.$row["rollNo"].'">VIEW</button></form></td></tr>';
        }
      }
    }
}

else {
    $sql = "SELECT * FROM student ";
    $result = $conn->query($sql);
    echo "<h3><center>".$course." and ".$gender."</center></h3>";
    echo '<table class = "table table-hover"><thead class="table-dark"><tr><th scope="col">Roll no </th><th scope="col">Name </th><th scope="col">View Details</th></tr></thead><tbody>';

    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
            $x = 0;
            $str_arr = explode (",", $row['listOfCourses']);
            foreach($str_arr as $value){
                if ($value == $course){
                    $x = 1;
                }
           }

        if ($x == 1){

            $x = 0;

            if ($gender == $row['gender']){
    
        echo "<tr><td>" . $row["rollNo"]. "</td><td> ".$row["name"]. "</td>";

        echo '<td><form action="student_detail.php" method="post"><button type="submit" class="btn btn-outline-primary" name="roll" value="'.$row["rollNo"].'">VIEW</button></form></td></tr>';
        }
     }
      }
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
<body>
    <br><form action="view_student_detail.php" method="post"><center><button type="submit" class="btn btn-dark">BACK</button></center></form><br>
</body>
</html>