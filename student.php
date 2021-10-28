<?php 
session_start();

$roll = $_POST['rollNo'];
$pass = $_POST['password'];

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM student WHERE rollNo = '$roll'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
    if ($row["password"] == $pass){
       echo "<script type='text/javascript'>alert('Logged in successfully'); </script>";

    $_SESSION['logged_in__stu_roll'] = $roll;
    $_SESSION['logged_in_stu_pass'] = $pass;

    }

    else {
        session_destroy();
    	echo "<script type='text/javascript'>alert('Wrong login credinals!!'); </script>";
        echo '<script type="text/javascript"> location.href = "student_login.php" </script>';
    }

}
}
else {
      session_destroy();
      echo "<script type='text/javascript'>alert('Wrong login credinals'); </script>";
        echo '<script type="text/javascript"> location.href = "student_login.php" </script>';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student</title>
</head>
<body>
<h2>I am Student</h2>
</body>
</html>

