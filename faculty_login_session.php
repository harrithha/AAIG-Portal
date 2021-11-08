<?php 
session_start();

$id = $_POST['id'];
$pass =$_POST['password'];

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM faculty WHERE id = '$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
    if ($row["password"] == $pass){
        echo '<script type="text/javascript"> location.href = "faculty.php" </script>';
    $_SESSION['logged_in_fac_id'] = $id;
    $_SESSION['logged_in_fac_pass'] = $pass;
    
    if(isset($_SESSION['logged_in__stu_roll'] )){
        unset($_SESSION['logged_in__stu_roll']);
    }
    if(isset($_SESSION['logged_in__admin_name'])){
        unset($_SESSION['logged_in__admin_name']);
    }

   }

    else {
        session_destroy();
    	echo "<script type='text/javascript'>alert('Wrong login credentials'); </script>";
        echo '<script type="text/javascript"> location.href = "faculty_login.php" </script>';
    }
}
}
else {
      session_destroy();
      echo "<script type='text/javascript'>alert('Wrong login credentials'); </script>";
      echo '<script type="text/javascript"> location.href = "faculty_login.php" </script>';
}



?>