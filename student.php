<?php 

$roll = $_POST['roll'];
$pass =$_POST['password'];

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
    }

    else {
    	echo "<script type='text/javascript'>alert('Wrong login credinals'); </script>";
        echo '<script type="text/javascript"> location.href = "student_login.php" </script>';
    }

}
}
else {
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

