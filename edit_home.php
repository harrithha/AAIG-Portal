<?php

session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);
$conn->close();




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Student</title>
</head>
<body>
<div class="edit_details">
<form action="edit_student.php" method="post">
  <div class="form-group">
    <label for="RollNo">Enter Roll Number of student whose details you want to edit : </label>
    <input type='number' class='form-control'  name='RollNo' placeholder='Enter Roll Number'>
  </div>
  <button type="submit" class="btn btn-primary">Proceed to Edit Details</button>
</form>
</div>
</body>
</html>