<?php
session_start();
if(!isset($_SESSION['logged_in__admin_name'])){
    echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
}

else{

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);
$id = $_POST['RollNo'];
$sql = "SELECT * FROM faculty WHERE id = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  // echo "Successful !" ;
   $p_roll = $row['id'];
   $p_name = $row['name'];
   $p_dept = $row['department'];
   $p_gender = $row['gender'];
   $p_age = $row['age'];
   $p_bg = $row['bloodGroup'];
   $p_phone = $row['phone'];
   $p_jd = $row['join_date'];
   $p_dob = $row['dob'];

  }
} 
else
{
    echo "<script type='text/javascript'>alert('Faculty with this roll number does not exist!'); </script>";
    echo '<script type="text/javascript"> location.href = "admin.php" </script>';
    exit();
}
$temp = strtotime($p_dob); 
$date_display = date('d/m/Y',$temp); 
// echo $date_input;    
$found = 0;
$directory = "images_faculty";
$images = glob($directory . "/*.jpg");
foreach($images as $image)
{
    if($image == "images_faculty/".$p_roll.".jpg")
    {
        $display_id_image = $image;
        $found = 1;
        //echo $image;
    }
  //echo $image;
}
if($found == 0)
{
    echo "<script type='text/javascript'>alert('Please ask faculty to upload photo!'); </script>";
    echo '<script type="text/javascript"> location.href = "admin.php" </script>';
    exit();
  $display_id_image = " ";
}
}
?>
<?php include("sidebar_admin.php"); ?>
<!DOCTYPE html>
<html lang=en>


<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/idcard.css">
</head>

<body>
<div id="printdivcontent">
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="card-header">
                            <img src="images/icons/iitdh.jpg" class="img-radius" alt="User-Profile-Image">
                            <b><i>INDIAN INSTITUTE OF TECHNOLOGY DHARWAD </i></b>
                        </div>
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25"> <img src=<?php echo"$display_id_image" ?> style = "height: 75px; width: 75px; border-radius: 10px" class="img-radius" alt="User-Profile-Image">
                                    </div>
                                    <h6 class="f-w-600" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                    <?php echo $p_name?> </h6>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h5 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMATION</h5>
                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <b>DEPARTMENT :</b>
                                        </div>
                                        <div class="col col-sm-6">
                                        <?php echo $p_dept?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <b>ID :</b>
                                        </div>
                                        <div class="col col-sm-6">
                                        <?php echo $p_roll?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <b>D.O.B :</b>
                                        </div>
                                        <div class="col col-sm-6">
                                        <?php echo $date_display?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <b>Phone No. :</b>
                                        </div>
                                        <div class="col col-sm-6">
                                        <?php echo $p_phone?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <b>BLOODGRP :</b>
                                        </div>
                                        <div class="col col-sm-6" style="color:red">
                                        <?php echo $p_bg?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <form action="admin.php" method="post"> 
    <div class="b" style="display: flex; justify-content: space-evenly;">
    <center><button type="submit" class="btn btn-outline-dark">BACK</button></center>
    <input type="button" class="btn btn-outline-dark" onclick="PrintDiv();" value="PRINT ID CARD" />
    </div>
    </form>
    </div>
</body>
<script type="text/javascript">  
        function PrintDiv() {  
            var divContents = document.getElementById("printdivcontent").innerHTML; 
            alert('Please make sure to check the BACKGROUND GRAPHICS checkbox before printing under MORE SETTINGS---> OPTIONS');  
            var printWindow = window.open('', '', 'height=900,width=900');  
            printWindow.document.write('<html><head><title>Print DIV Content</title><link rel="stylesheet" href="css/idcard.css?version=1"><link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"><link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">');  
            printWindow.document.write('</head><body >');  
            printWindow.document.write(divContents);  
            printWindow.document.write('</body></html>');
            setTimeout(() => {   
            printWindow.document.close();  
            printWindow.print(); }, 2000);
              
        }  
    </script>
</html>