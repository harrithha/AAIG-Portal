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
       echo "<script type='text/javascript'>alert('Logged in successfully'); </script>";

    $_SESSION['logged_in__admin_name'] = $name;
    $_SESSION['logged_in_admin_pass'] = $pass;
    }

    else {
        session_destroy();
    	echo "<script type='text/javascript'>alert('Wrong login credinals'); </script>";
        echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
    }

}
}
else {
    session_destroy();
      echo "<script type='text/javascript'>alert('Wrong login credinals'); </script>";
        echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin</title>
</head>
<body>
<!---<h2>I am admin</h2>--->
<div class="m-4">
        <nav class="nav nav-pills nav-justified">
            <a href="add_student.php" class="nav-item nav-link ">
            <i class="bi-person"></i> ADD STUDENT
            </a>
            <a href="view_student_detail.php" class="nav-item nav-link ">
                <i class="bi-person"></i> VIEW STUDENT DETAILS
            </a>
            <a href="falculty_login.php" class="nav-item nav-link ">
                <i class="bi-person"></i> EDIT STUDENT DETAILS
            </a>
            <a href="admin_login.php" class="nav-item nav-link ">
            <i class="bi bi-card-list"></i> ID CARD GENERATION
            </a>
        </nav>
    </div>
</body>
</html>

