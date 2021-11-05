<?php 
session_start();

if(!isset($_SESSION['logged_in__admin_name'])){
    echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
}

if(isset($_POST['course'])){

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$course = $_POST['course'];

}
else{
  echo '<script type="text/javascript"> location.href = "course_wise_attendance.php" </script>';
}





?>

<?php include("sidebar_admin.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>COURSE ATTENDANCE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images_add/icons/favicon.ico"/>
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
  <link rel="stylesheet" type="text/css" href="v.css">
  <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

</head>
<body>
  <div class="container-contact100" style="background-image: url('images_add/bg-01.jpg');">
    <div class="wrap-contact100" >
  

    <h1 class="contact100-form-title"><center>ATTENDANCE</center></h1>


    <?php

    $tname = $course."date";

    $sql = "SELECT * FROM $tname ";
    $result = $conn->query($sql);

    

    echo '<h3 class="contact100-form-title"><center>'.$course.'</center></h3>';
    echo '<table id="tbl_exporttable_to_xls" class = " table table-hover table-responsive"><thead class="table-dark"><tr><th scope="col">Roll no </th><th scope="col">Name </th>';

    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {    
        echo '<th scope="col">' . $row["date"]. '</th>';
      }
    }
    echo '<th scope="col">Total</th>';
    echo '</tr></thead><tbody>';
    
    $sql = "SELECT * FROM $course ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
    
        echo '<tr><td>' . $row["rollNo"]. '</td><td>'.$row['name'].'</td>';
        
        $counter = 0;
        $total = 0;

        $att = explode(",", $row['attendance']);
        foreach ($att as  $value) {
            if ($value != ''){
              $total++;
            }
            
            if ($value == '0'){
              echo '<td>A</td>';
            }
            else if ($value == '1'){
              echo '<td>P</td>';
              $counter++;
            }
        }
        echo '<td>'.$counter.'/'.$total.'</td></tr>';
      }
    }

    else {
      echo '<tr><td> - </td><td> - </td></tr>';
    }


    
  $conn->close();

  ?>

  </tbody></table>

  <br><br>

    <form action="course_wise_attendance.php" method="post"> 
    <div class="b" style="display: flex; justify-content: space-evenly;">
     <button type="submit" class="btn btn-outline-dark">BACK</button></center>
     <button type="submit" onclick="ExportToExcel('xlsx')" class="btn btn-outline-dark">DOWNLOAD EXCEL REPORT</button>
     </div>
    </form>

  </div>
</div>
<script>

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('tbl_exporttable_to_xls');
            var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
            return dl ?
                XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
                XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
        }

    </script>
<!--===============================================================================================-->
  <script src="vendor_add/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor_add/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor_add/bootstrap/js/popper.js"></script>
  <script src="vendor_add/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor_add/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function(){
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });


      $(".js-select2").each(function(){
        $(this).on('select2:close', function (e){
          if($(this).val() == "Please chooses") {
            $('.js-show-service').slideUp();
          }
          else {
            $('.js-show-service').slideUp();
            $('.js-show-service').slideDown();
          }
        });
      });
    })
  </script>
<!--===============================================================================================-->
  <script src="vendor_add/daterangepicker/moment.min.js"></script>
  <script src="vendor_add/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor_add/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="vendor_add/noui/nouislider.min.js"></script>
  <script>
      var filterBar = document.getElementById('filter-bar');

      noUiSlider.create(filterBar, {
          start: [ 1500, 3900 ],
          connect: true,
          range: {
              'min': 1500,
              'max': 7500
          }
      });

      var skipValues = [
      document.getElementById('value-lower'),
      document.getElementById('value-upper')
      ];

      filterBar.noUiSlider.on('update', function( values, handle ) {
          skipValues[handle].innerHTML = Math.round(values[handle]);
          $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
          $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
      });
  </script>



</body>
</html>
