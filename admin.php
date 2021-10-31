<?php 
session_start();

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
            <a href="edit_home.php" class="nav-item nav-link ">
                <i class="bi-person"></i> EDIT STUDENT DETAILS
            </a>
            <a href="admin_login.php" class="nav-item nav-link ">
            <i class="bi bi-card-list"></i> ID CARD GENERATION
            </a>
        </nav>
    </div>
</body>
</html>

