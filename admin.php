<?php
session_start();
if (!isset($_SESSION['logged_in__admin_name'])) {
    echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/admin_main.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="page-wrap">
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxs-user icon'></i>
                <div class="logo_name">
                    ADMIN
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
                <br>
                <li>
                    <a href="admin_add_faculty.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">ADD FACULTY</span>
                    </a>
                    <span class="tooltip">ADD FACULTY</span>
                </li>
                <li>
                    <a href="admin_edit_faculty_home.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">EDIT FACULTY DETAILS</span>
                    </a>
                    <span class="tooltip">EDIT FACULTY DETAILS</span>
                </li>
                <li>
                    <a href="view_faculty_detail.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">VIEW FACULTY DETAILS</span>
                    </a>
                    <span class="tooltip">VIEW FACULTY DETAILS</span>
                </li>
                <li>
                    <a href="add_student.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">ADD STUDENT</span>
                    </a>
                    <span class="tooltip">ADD STUDENT</span>
                </li>
                <li>
                    <a href="edit_home.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">EDIT STUDENT DETAILS</span>
                    </a>
                    <span class="tooltip">EDIT STUDENT DETAILS</span>
                </li>
                <li>
                    <a href="view_student_detail.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">VIEW STUDENT DETAILS</span>
                    </a>
                    <span class="tooltip">VIEW STUDENT DETAILS</span>
                </li>
                <li>
                    <a href="">
                        <i class='bx bx-user'></i>
                        <span class="links_name">VIEW ATTENDANCE</span>
                    </a>
                    <span class="tooltip">VIEW ATTENDANCE</span>
                </li>
                <li>
                    <a href="">
                        <i class='bx bx-user'></i>
                        <span class="links_name">ID CARD GENERATION</span>
                    </a>
                    <span class="tooltip">ID CARD GENERATION</span>
                </li>
                <li class="profile">
                    <div class="profile-details">
                        <img src="" alt="user Image">
                        <div class="name_job">
                            <div class="name">Chidaksh.R</div>
                            <div class="job">ADMIN</div>
                        </div>
                    </div>
                    <a href="admin_login.php"><i class='bx bx-log-out' id="log_out"></i></a>
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