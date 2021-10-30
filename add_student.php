<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    .add_details{
      margin-top: 40px;
      margin-left: auto;
      margin-right: auto;
      width: 500px;
      padding: 20px;
      text-align: center;
    }

    h1{
        margin: auto;
        text-align: center;
        font-family: arial;
        padding-top: 5%;
        color: 	#1E90FF;
    }

    .form-group{
        padding-bottom: 10px;
    }
    .form-check-input{
        margin: auto;
        position: relative;
    }
    label{
        font-weight: bold;
    }

    .form-check label{
        margin-left: 0;
        font-weight: normal;
    }
</style>
<h1>ADD DETAILS </h1>
<div class="add_details">
<form action="add_students_to_db.php" method="post">
  <div class="form-group">
    <label for="RollNo">Roll Number</label>
    <input type="number" class="form-control"  name="RollNo" placeholder="Enter Roll Number">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" name="pass" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="No_of_courses">Number of courses taken</label>
    <input type="number" class="form-control" name="No_of_courses" placeholder="No. of courses taken">
  </div>
  <div class="form-group">
  <label for="List_of_Courses">List of courses taken</label> <hr>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="MA_101" name="course[]">
  <label class="form-check-label" for="MA_101">
    MA 101
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="BB_101" name="course[]">
  <label class="form-check-label" for="BB_101">
    BB 101
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="PH_101" name="course[]">
  <label class="form-check-label" for="PH_101">
    PH 101
  </label>
  </div>
  </div>
  <div class="form-group">
    <label for="Age">Age</label>
    <input type="number" class="form-control" name="Age" placeholder="Enter Age">
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <label for="male">Male</label>
    <input type="radio" name="gender" value="male">
    <label for="female"> &nbsp &nbsp &nbsp &nbsp Female</label>
    <input type="radio" name="gender" value="female">
  </div>
  <div class="form-group">
    <label for="blood_group">Blood Group</label>
    <input type="text" class="form-control" name="blood_group" placeholder="Enter Blood Group">
  </div>
  <div class="form-group">
    <label for="Branch">Branch</label>
    <input type="text" class="form-control" name="Branch" placeholder="Enter Branch">
  </div>
  <div class="form-group">
    <label for="Passing_Year">Passing Year</label>
    <input type="number" class="form-control" name="Passing_Year" placeholder="Enter Passing Year">
  </div>
  <div class="form-group">
    <label for="Program">Program</label>
    <input type="text" class="form-control" name="Program" placeholder="Enter Program">
  </div>
  <div class="form-group">
    <label for="Phone">Phone No.</label>
    <input type="phone" class="form-control" name="Phone" placeholder="Enter Phone No.">
  </div>
  <div class="form-group">
    <label for="DOB">Date of Birth</label>
    <input type="date" class="form-control" name="DOB" placeholder="Enter DOB">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</html>