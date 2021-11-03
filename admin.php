<?php 
session_start();
if(!isset($_SESSION['logged_in__admin_name'])){
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
            <a href="admin_add_faculty.php" class="nav-item nav-link ">
            <i class="bi-person"></i> ADD FACULTY
            </a>

            <a href="admin_edit_faculty_home.php" class="nav-item nav-link ">
                <i class="bi-person"></i> EDIT FACULTY DETAILS
            </a>


            <a href="view_faculty_detail.php" class="nav-item nav-link ">

                <i class="bi-person"></i> VIEW FACULTY DETAILS
            </a>

            <a href="add_student.php" class="nav-item nav-link ">
            <i class="bi-person"></i> ADD STUDENT
            </a>

            <a href="edit_home.php" class="nav-item nav-link ">
                <i class="bi-person"></i> EDIT STUDENT DETAILS
            </a>
            <a href="view_student_detail.php" class="nav-item nav-link ">
                <i class="bi-person"></i> VIEW STUDENT DETAILS
            </a>
            <a href="" class="nav-item nav-link ">
                <i class="bi-person"></i> VIEW ATTENDANCE
            </a>

            <a href="" class="nav-item nav-link ">
            <i class="bi bi-card-list"></i> ID CARD GENERATION
            </a>
        </nav>
    </div>
</body>
</html>

