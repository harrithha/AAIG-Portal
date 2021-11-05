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
    <link rel="stylesheet" type="text/css" href="css/student.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images_add/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor_add/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts_add/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts_add/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor_add/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor_add/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor_add/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor_add/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor_add/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor_add/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css_add/util.css">
    <link rel="stylesheet" type="text/css" href="css_add/main.css">
    <!--===============================================================================================-->
    <style>
        .sidebar.open {
            width: 225px;
        }

        .sidebar.open li.profile {
            width: 225px;
        }

        .container {
            padding-left: 50px;
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <div style="display: grid; grid-template-columns: auto auto;">
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
                    <li>
                        <a href="admin_login.php">
                            <i class='bx bx-log-out' id="log_out"></i>
                            <span class="links_name">Log Out</span>
                        </a>
                        <span class="tooltip">Log Out</span>
                    </li>
                    <br>
                    <li class="profile">
                        <div class="profile-details">
                            <img src="images/icons/admin.png" alt="Admin Image">
                            <div class="name_job">
                                <div class="name">Chidaksh.R</div>
                                <div class="job">ADMIN</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div style="float: right;">
            <div>
                <div class="container">
                    <div class="row">
                        <div>
                            <div class="card">
                                <div class="card-img" style="background-image: url('images/icons/new_fac.png');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="admin_add_faculty.php">ADD</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="admin_add_faculty.php">
                                        <h2>
                                            <center>ADD FACULTY</center>
                                        </h2>
                                        <p></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-img" style="background-image:url('images/icons/edit1_icon.png');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="admin_edit_faculty_home.php">EDIT</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="admin_edit_faculty_home.php">
                                        <h2>
                                            <center>EDIT FACULTY DETAILS</center>
                                        </h2>
                                        <p></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-img" style="background-image:url('images/icons/fac.png');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="view_faculty_detail.php">VIEW</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="view_faculty_detail.php">
                                        <h2>
                                            <center>VIEW FACULTY DETAILS</center>
                                        </h2>
                                        <p>
                                            <center></center>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div>
                            <div class="card">
                                <div class="card-img" style="background-image: url('images/icons/new_stu1.png');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="add_student.php">ADD</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="add_student.php">
                                        <h2>
                                            <center>ADD STUDENT</center>
                                        </h2>
                                        <p></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-img" style="background-image:url('images/icons/edit1_icon.png');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="edit_home.php">EDIT</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="edit_home.php">
                                        <h2>
                                            <center>EDIT STUDENT DETAILS</center>
                                        </h2>
                                        <p></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-img" style="background-image:url('images/icons/student1_icon.jpg');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="view_student_detail.php">VIEW</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="view_student_detail.php">
                                        <h2>
                                            <center>VIEW STUDENT DETAILS</center>
                                        </h2>
                                        <p>
                                            <center></center>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div>
                            <div class="card">
                                <div class="card-img" style="background-image: url('images/icons/view_att.png');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="admin_view_attendance.php">VIEW</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="admin_view_attendance.php">
                                        <h2>
                                            <center>VIEW ATTENDANCE</center>
                                        </h2>
                                        <p></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-img" style="background-image:url('images/icons/idcard_new.jpg');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="admin_studentid_home.php">CREATE</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="admin_studentid_home.php">
                                        <h2>
                                            <center>GENERATE ID CARD</center>
                                        </h2>
                                        <p></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        $(document).ready(function() {

            $('.card').delay(1800).queue(function(next) {
                $(this).removeClass('hover');
                $('a.hover').removeClass('hover');
                next();
            });
        });
    </script>
</body>

</html>