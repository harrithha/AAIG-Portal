<?php 
session_start();

if(!isset($_SESSION['logged_in_fac_id'])){
    echo '<script type="text/javascript"> location.href = "faculty_login.php" </script>';
}
else{

if(!isset($_SESSION['course'])){
    echo '<script type="text/javascript"> location.href = "mark_attendance_list.php" </script>';
}

else{

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$date = $_POST['date'];

if ($date != ""){

    $conn = new mysqli($host, $username, $password, $dbname);

    $course = $_SESSION['course'];
    $roll_arr = array();
    $att_arr = array();
    $counter = 0;

    $tname = $course."date";

    $sql = "SELECT * FROM $tname WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
          echo "<script type='text/javascript'>alert('Already marked date !'); </script>";
          echo '<script type="text/javascript"> location.href = "mark_attendance_list.php" </script>';

    }

    else{

    $warning = 0;

    $sql = "SELECT * FROM $course ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            $roll = $row['rollNo'];

            $value = $_POST[$roll];

            if ($value != "0" && $value != "1"){
                $warning = 1;
            }

            array_push($roll_arr, $roll);
            array_push($att_arr, $value);
        
        $counter = $counter + 1;    
     }
    }

    if ($warning == 0){

        for ($i = 0 ; $i < $counter ; $i++){

        $roll = $roll_arr[$i];
        $attendance = '';

        $sql = "SELECT attendance FROM $course where rollNO = '$roll'";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        $att = $row['attendance'];

        if ($att == ''){
            $attendance = $att_arr[$i];
        }
        else{
        $attendance = $att.",".$att_arr[$i];
        }

        $sql = "UPDATE $course SET attendance = '$attendance' WHERE rollNO = '$roll'";  
        $conn->query($sql);
        }

        $tname = $course."date";

        $sql = "INSERT INTO $tname (date) VALUES ('$date')";
        if ($conn->query($sql) === TRUE){
         echo "<script type='text/javascript'>alert('Attendance Marked Successfully !'); </script>";
            echo '<script type="text/javascript"> location.href = "mark_attendance_list.php" </script>';

        }
        unset($_SESSION['course']);

      }
      else {
          echo "<script type='text/javascript'>alert('Mark Attendance for all students!'); </script>";
          echo '<script type="text/javascript"> location.href = "mark_attendance_list.php" </script>';
      }


   }

   

  $conn->close();


  }

  else {
    echo "<script type='text/javascript'>alert('Enter a date !'); </script>";
    echo '<script type="text/javascript"> location.href = "mark_attendance_list.php" </script>';
  }


 }

}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mark Attendance</title>
</head>
<body>
	
</body>
</html>