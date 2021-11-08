<?php 
session_start();

$name = $_POST['username'];
$pass =$_POST['password'];

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM admin WHERE username = '$name'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
    if ($row["password"] == $pass){

    echo '<script type="text/javascript"> location.href = "admin.php" </script>';

    $_SESSION['logged_in__admin_name'] = $name;
    $_SESSION['logged_in_admin_pass'] = $pass;

    if(isset($_SESSION['logged_in__stu_roll'] )){
        unset($_SESSION['logged_in__stu_roll']);
    }

    if(isset($_SESSION['logged_in_fac_id'])){
        unset($_SESSION['logged_in_fac_id']);
    }

    }

    else {
        session_destroy();
    	echo "<script type='text/javascript'>alert('Wrong login credentials'); </script>";
        echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
    }

}
}
else {
    session_destroy();
      echo "<script type='text/javascript'>alert('Wrong login credentials'); </script>";
        echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
}

?>