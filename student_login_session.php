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
        echo '<script type="text/javascript"> location.href = "student.php" </script>';

    $_SESSION['logged_in__stu_roll'] = $roll;
    $_SESSION['logged_in_stu_pass'] = $pass;


    if(isset($_SESSION['logged_in__admin_name'])){
        unset($_SESSION['logged_in__admin_name']);
    }
    if(isset($_SESSION['logged_in_fac_id'])){
        unset($_SESSION['logged_in_fac_id']);
    }

    }

    else {
        session_destroy();
    	echo "<script type='text/javascript'>alert('Wrong login credentials!!'); </script>";
        echo '<script type="text/javascript"> location.href = "student_login.php" </script>';
    }

}
}
else {
      session_destroy();
      echo "<script type='text/javascript'>alert('Wrong login credentials'); </script>";
        echo '<script type="text/javascript"> location.href = "student_login.php" </script>';
}
?>