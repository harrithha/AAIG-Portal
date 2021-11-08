<?php
session_start();
if (isset($_SESSION['logged_in__stu_roll'])) {
  unset($_SESSION['logged_in__stu_roll']);
}

if (isset($_SESSION['logged_in_fac_id'])) {
  unset($_SESSION['logged_in_fac_id']);
}
if (isset($_SESSION['logged_in__stu_roll'])) {
  unset($_SESSION['logged_in__stu_roll']);
}

$host = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE hac";

$conn->query($sql);

$dbname = "hac";


$conn = new mysqli($host, $username, $password, $dbname);


$sql = "CREATE TABLE admin (
username VARCHAR(50) PRIMARY KEY ,
password VARCHAR(20) 
)";

$conn->query($sql);

$sql = "INSERT INTO admin (username, password) VALUES ('IITDH','pass#123')";

 if ($conn->query($sql) === TRUE) {
//   echo "<script type='text/javascript'>alert('New Record Created Successfully !'); </script>";
//   echo '<script type="text/javascript"> location.href = "admin.php" </script>';
//   exit();
} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
}
    

$sql = "CREATE TABLE student (
rollNo INT PRIMARY KEY ,
name VARCHAR(50) ,
password VARCHAR(20) NOT NULL ,
noOfCourses INT ,
listOfCourses VARCHAR(50),
age INT ,
gender VARCHAR(10),
bloodGroup VARCHAR(20),
branch VARCHAR(50),
passingYear INT,
programme VARCHAR(50),
phone  VARCHAR(20),
dob DATE)";

$conn->query($sql);


$sql = "CREATE TABLE faculty (
id INT PRIMARY KEY ,
name VARCHAR(50) ,
password VARCHAR(20) ,
age INT ,
gender VARCHAR(10),
bloodGroup VARCHAR(20),
department VARCHAR(50),
join_date DATE,
phone  VARCHAR(20),
dob DATE)";


$conn->query($sql);

$sql = "CREATE TABLE list_of_courses (
    course_name VARCHAR(100),
    instructor_id INT)";

$conn->query($sql);

$conn->close();


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>HOME</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700'>
  <link href="http://fonts.cdnfonts.com/css/elianto" rel="stylesheet">

</head>
<style>
  /* body {
    margin: 40px 0;
    font-family: "Raleway";
    font-size: 14px;
    font-weight: 500;
    background-color: #BCAAA4;
  } */
  body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 3s ease infinite;
    height: 100vh;
    font-family: "Raleway";
    margin: 40px 0;
    font-weight: 500;
  }

  @keyframes gradient {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
  }

  .title {
    font-family: 'Elianto', sans-serif;
    font-size: 40px;
    font-weight: 700;
    /* color: #5D4037; */
    color: black;
    text-align: center;
  }

  p {
    line-height: 1.5em;
  }

  h1+p,
  p+p {
    margin-top: 10px;
  }

  .container {
    padding: 40px 80px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .card-wrap {
    margin: 10px;
    transform: perspective(800px);
    transform-style: preserve-3d;
    cursor: pointer;
  }

  .card-wrap:hover .card-info {
    transform: translateY(0);
  }

  .card-wrap:hover .card-info p {
    opacity: 1;
  }

  .card-wrap:hover .card-info,
  .card-wrap:hover .card-info p {
    transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .card-wrap:hover .card-info:after {
    transition: 5s cubic-bezier(0.23, 1, 0.32, 1);
    opacity: 1;
    transform: translateY(0);
  }

  .card-wrap:hover .card-bg {
    transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1), opacity 5s cubic-bezier(0.23, 1, 0.32, 1);
    opacity: 0.8;
  }

  .card-wrap:hover .card {
    transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 2s cubic-bezier(0.23, 1, 0.32, 1);
    box-shadow: rgba(255, 255, 255, 0.2) 0 0 40px 5px, white 0 0 0 1px, rgba(0, 0, 0, 0.66) 0 30px 60px 0, inset #333 0 0 0 5px, inset white 0 0 0 6px;
  }

  .card {
    position: relative;
    flex: 0 0 240px;
    width: 240px;
    height: 320px;
    background-color: #333;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.66) 0 30px 60px 0, inset #333 0 0 0 5px, inset rgba(255, 255, 255, 0.5) 0 0 0 6px;
    transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  }

  .card-bg {
    opacity: 0.5;
    position: absolute;
    top: -20px;
    left: -20px;
    width: 100%;
    height: 100%;
    padding: 20px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    pointer-events: none;
  }

  .card-info {
    padding: 20px;
    position: absolute;
    bottom: 0;
    color: #fff;
    transform: translateY(40%);
    transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
  }

  .card-info p {
    opacity: 0;
    text-shadow: black 0 2px 3px;
    transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
  }

  .card-info * {
    position: relative;
    z-index: 1;
  }

  .card-info:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.6) 100%);
    background-blend-mode: overlay;
    opacity: 0;
    transform: translateY(100%);
    transition: 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  }

  .card-info h1 {
    font-family: "Playfair Display";
    font-size: 36px;
    font-weight: 700;
    text-shadow: rgba(0, 0, 0, 0.5) 0 10px 10px;
  }

  .card .data-image {
    width: 100px;
    object-fit: cover;
  }
</style>

<body>

  <h1 class="title">AAIG PORTAL </h1>

  <div id="app" class="container">
    <a href="index.php">
      <card data-image="images/icons/home_portal.jpg">
        <h1 slot="header">HOME</h1>
        <p slot="content">Welcome to our Automated Attendece Management System!</p>
      </card>
    </a>
    <a href="student_login.php">
      <card data-image="images/icons/student_portal.jpg">
        <h1 slot="header">STUDENT</h1>
        <p slot="content">Login as student using credentials given by admin!</p>
      </card>
    </a>
    <a href="faculty_login.php">
      <card data-image="images/icons/faculty_portal.jpg">
        <h1 slot="header">FACULTY</h1>
        <p slot="content">Login as faculty using credentials given by admin!</p>
      </card>
    </a>
    <a href="admin_login.php">
      <card data-image="images/icons/admin_portal.jpg">
        <h1 slot="header">ADMIN</h1>
        <p slot="content">Login as admin using credentials given by institute!</p>
      </card>
    </a>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>



  <script>
    /*Downloaded from https://www.codeseek.co/flystyleppp/parallax-depth-cards-qrXdmz */
    Vue.config.devtools = true;

    Vue.component('card', {
      template: '\n    <div class="card-wrap"\n      @mousemove="handleMouseMove"\n      @mouseenter="handleMouseEnter"\n      @mouseleave="handleMouseLeave"\n      ref="card">\n      <div class="card"\n        :style="cardStyle">\n        <div class="card-bg" :style="[cardBgTransform, cardBgImage]"></div>\n        <div class="card-info">\n          <slot name="header"></slot>\n          <slot name="content"></slot>\n        </div>\n      </div>\n    </div>',
      mounted: function mounted() {
        this.width = this.$refs.card.offsetWidth;
        this.height = this.$refs.card.offsetHeight;
      },

      props: ['dataImage'],
      data: function data() {
        return {
          width: 0,
          height: 0,
          mouseX: 0,
          mouseY: 0,
          mouseLeaveDelay: null
        };
      },
      computed: {
        mousePX: function mousePX() {
          return this.mouseX / this.width;
        },
        mousePY: function mousePY() {
          return this.mouseY / this.height;
        },
        cardStyle: function cardStyle() {
          var rX = this.mousePX * 30;
          var rY = this.mousePY * -30;
          return {
            transform: 'rotateY(' + rX + 'deg) rotateX(' + rY + 'deg)'
          };
        },
        cardBgTransform: function cardBgTransform() {
          var tX = this.mousePX * -40;
          var tY = this.mousePY * -40;
          return {
            transform: 'translateX(' + tX + 'px) translateY(' + tY + 'px)'
          };
        },
        cardBgImage: function cardBgImage() {
          return {
            backgroundImage: 'url(' + this.dataImage + ')'
          };
        }
      },
      methods: {
        handleMouseMove: function handleMouseMove(e) {
          this.mouseX = e.pageX - this.$refs.card.offsetLeft - this.width / 2;
          this.mouseY = e.pageY - this.$refs.card.offsetTop - this.height / 2;
        },
        handleMouseEnter: function handleMouseEnter() {
          clearTimeout(this.mouseLeaveDelay);
        },
        handleMouseLeave: function handleMouseLeave() {
          var _this = this;

          this.mouseLeaveDelay = setTimeout(function() {
            _this.mouseX = 0;
            _this.mouseY = 0;
          }, 1000);
        }
      }
    });

    var app = new Vue({
      el: '#app'
    });
  </script>




</body>

</html>