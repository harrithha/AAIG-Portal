<?php
$id = $_SESSION['logged_in_fac_id'];
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "SELECT * FROM faculty WHERE id = '$id'";
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
                    <a href="faculty_add_details.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">ADD/EDIT DETAILS</span>
                    </a>
                    <span class="tooltip">ADD/EDIT DETAILS</span>
                </li>
                <li>
                    <a href="faculty_view_attendance.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">VIEW ATTENDANCE</span>
                    </a>
                    <span class="tooltip">VIEW ATTENDANCE</span>
                </li>
                <li>
                    <a href="mark_attendance_list.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">MARK ATTENDANCE</span>
                    </a>
                    <span class="tooltip">MARK ATTENDANCE</span>
                </li>
                <li>
                    <a href="faculty_add_course.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">ADD NEW COURSE</span>
                    </a>
                    <span class="tooltip">ADD NEW COURSE</span>
                </li>
                <li>
                    <a href="display_faculty_idcard.php">
                        <i class='bx bx-user'></i>
                        <span class="links_name">VIEW ID CARD</span>
                    </a>
                    <span class="tooltip">VIEW ID CARD</span>
                </li>
                <li class="profile">
                    <div class="profile-details">
                        <img src="images/icons/education.png" alt="Faculty Image">
                        <div class="name_job">
                            <div class="name"><?php echo $p_name ?></div>
                            <div class="job">FACULTY</div>
                        </div>
                    </div>
                    <a href="faculty_login.php"><i class='bx bx-log-out' id="log_out"></i></a>
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