<?php 
session_start();
if(!isset($_SESSION['logged_in_fac_id'])){
    echo '<script type="text/javascript"> location.href = "faculty_login.php" </script>';
}
$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM faculty WHERE id = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  // echo "Successful !" ;
   $p_name = $row['name'];

  }
} 
?>
<?php include("sidebar_faculty.php"); ?>  
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
    <link href="sidebar_admin.php" >
    <title>FACULTY</title>
</head>
</head>
<body>
<!---<h2>I am admin</h2>--->
<!-- <div class="m-4">
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
            <a href="display_faculty_idcard.php" class="nav-item nav-link ">
            <i class="bi bi-card-list"></i> VIEW ID CARD
            </a>
            <a href="faculty_add_course.php" class="nav-item nav-link ">
            <i class="bi bi-card-list"></i> ADD NEW COURSE
            </a>
        </nav>
    </div> -->
    <div class="page-wrap">
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxs-user icon'></i>
                <div class="logo_name">
                    FACULTY
                </div>
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <ul class="nav-list">
                <!-- <li>
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search...">
                    <span class="tooltip">Search</span>
                </li> -->
                <li>
                    <a href="index.php">
                        <i class='bx bxs-home'></i>
                        <span class="links_name">HOME</span>

                    </a>
                    <span class="tooltip">HOME</span>
                </li>
                <li>
                    <a href="faculty_login.php">
                        <i class='bx bx-log-out' id="log_out"></i>
                        <span class="links_name">Log Out</span>
                    </a>
                    <span class="tooltip">Log Out</span>
                </li>
                <br>
                <li class="profile">
                    <div class="profile-details">
                        <img src="images/icons/admin.png" alt="user Image">
                        <div class="name_job">
                            <div class="name"><?php echo $p_name ?></div>
                            <div class="job">FACULTY</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- <section class="home-section">
        <div class="text">Dashboard</div>
    </section> -->
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        // const ChartSideBar = document.getElementById("page-wrap");

        // if (!sessionStorage.getItem('sideBarDisplay')) {
        //     sessionStorage.sideBarDisplay = 'none';
        //     console,log("hii");
        // }
        // console.log(sessionStorage.sideBarDisplay);
        // ChartSideBar.style.display = sessionStorage.sideBarDisplay;


        // function chartButton() {
        //     ChartSideBar.style.display = (ChartSideBar.style.display === 'block') ? 'none' : 'Block';
        //     sessionStorage.sideBarDisplay = ChartSideBar.style.display;
        // }

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
            //chartButton();
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });
        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>
</html>