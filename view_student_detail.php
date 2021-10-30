<?php 
session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM student";

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
    <br><h3><center>FILTERS</center></h3>
    <form action="filter_view.php" method="post">
      <label for="gender">GENDER</label>
      <select name="gender"class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected value="all">ALL</option>
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
      </select><br><br>
      <label for="course">COURSE</label>
      <select name="course"class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected value="all">ALL</option>
        <option value="maths">MA 101</option>
        <option value="physics">PH 101</option>
        <option value="bio">BB 101</option>
      </select><br><br>
      <center><button type="submit" class="btn btn-outline-success">APPLY</button></center>
    </form><br><br><br>

    <table class = "table table-hover"><thead class="table-dark"><tr><th scope="col">Roll no </th><th scope="col">Name </th><th scope="col">View Details</th></tr></thead><tbody>

    <?php

    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["rollNo"]. "</td><td> ".$row["name"]. "</td>";

        echo '<td><form action="student_detail.php" method="post"><button type="submit" class="btn btn-outline-primary" name="roll" value="'.$row["rollNo"].'">VIEW</button></form></td></tr>';
        }
  }

    ?>

    </tbody></table>


</body>
</html>
