<?php
session_start();
if (!isset($_SESSION['logged_in__stu_roll'])) {
    echo '<script type="text/javascript"> location.href = "student_login.php" </script>';
}
$id = $_SESSION['logged_in__stu_roll'];
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM student WHERE rollNo = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        // echo "Successful !" ;
        $p_name = $row['name'];
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>STUDENT</title>
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
        body{
            background: rgba(204, 182, 94, 0.4);
        }
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
                        STUDENT
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
                        <a href="student_login.php">
                            <i class='bx bx-log-out' id="log_out"></i>
                            <span class="links_name">Log Out</span>
                        </a>
                        <span class="tooltip">Log Out</span>
                    </li>
                    <br>
                    <li class="profile">
                        <div class="profile-details">
                            <img src="images/icons/student.png" alt="User Image" style="background-color: white;">
                            <div class="name_job">
                                <div class="name"><?php echo $p_name ?></div>
                                <div class="job">STUDENT</div>
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
                                <div class="card-img" style="background-image: url('images/icons/student1_icon.jpg');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="student_profile.php">VIEW</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="student_profile.php">
                                        <h2>
                                            <center>PROFILE</center>
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
                                            <a href="student_add_own_details.php">EDIT</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="student_add_own_details.php">
                                        <h2>
                                            <center>EDIT DETAILS</center>
                                        </h2>
                                        <p></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-img" style="background-image:url('images/icons/enroll1.png');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="student_register.php">REGISTER</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="student_register.php">
                                        <h2>
                                            <center>REGISTER FOR A NEW COURSE</center>
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
                                <div class="card-img" style="background-image:url('images/icons/view_att.png');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="stud_view_attendance.php">VIEW</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="stud_view_attendance.php">
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
                                <div class="card-img" style="background-image:url('images/icons/idcard.jpg');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="display_student_idcard.php">VIEW</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <a href="display_student_idcard.php">
                                        <h2>
                                            <center>ID CARD</center>
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