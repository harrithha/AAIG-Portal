<?php 
session_start();
if(!isset($_SESSION['logged_in_fac_id'])){
    echo '<script type="text/javascript"> location.href = "faculty_login.php" </script>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Faculty</title>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>FACULTY</title>
</head>
</head>
<body>
<!---<h2>I am admin</h2>--->
<div class="m-4">
        <nav class="nav nav-pills nav-justified">
            <a href="faculty_add_details.php" class="nav-item nav-link ">
            <i class="bi-person"></i> ADD/EDIT DETAILS
            </a>
            <a href="faculty_view_attendance.php" class="nav-item nav-link ">
                <i class="bi-person"></i> VIEW ATTENDANCE
            </a>
            <a href="mark_attendance_list.php" class="nav-item nav-link ">
                <i class="bi-person"></i> MARK ATTENDANCE
            </a>
            <a href="" class="nav-item nav-link ">
            <i class="bi bi-card-list"></i> VIEW ID CARD
            </a>
            <a href="faculty_add_course.php" class="nav-item nav-link ">
            <i class="bi bi-card-list"></i> ADD NEW COURSE
            </a>
        </nav>
    </div>
</body>
</html>