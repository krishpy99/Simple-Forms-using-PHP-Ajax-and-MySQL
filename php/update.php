<?php
include "db.php";
if(!isset($_SESSION['name'])):
  header("location: login.php");
endif;

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Details</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <div class="row">
  <div class="col-md-5 mx-auto mt-5">
  <div class="card">
  <div class="card-header">
  <h3>Update User</h3>
  </div>
  <div class="card-body">
  <form>
    <div class="form-group">
  <input type="text" id="name" class="form-control name" placeholder="Name" value="<?php echo $_SESSION['name']; ?>">
  <div class="invalid-feedback" style="font-size:16px;">Name is required</div>
  </div>
  <div class="form-group">
  <input type="text" id="DOB" class="form-control DOB" placeholder="Date of Birth" value="<?php echo $_SESSION['DOB']; ?>">
  <div class="invalid-feedback" style="font-size:16px;">Date of Birth is required</div>
  </div>
  <!-- Close form-group -->
  <div class="form-group">
  <input type="text" id="phone" class="form-control phone" placeholder="Phone Number" value="<?php echo $_SESSION['phone']; ?>">
  <div class="invalid-feedback emailError" style="font-size:16px;">Phone Number is required</div>
  </div>
  <!-- Close form-group -->
  <div class="form-group">
  <input type="text" id="address" class="form-control address" placeholder="Address" value="<?php echo $_SESSION['address']; ?>">
  <div class="invalid-feedback" style="font-size:16px;">Address is required</div>
  </div>
  <!-- Close form-group -->
  <div class="form-group">
   <button type="button" id="update" class="btn btn-info">Update</button>
  
  </div>
  <!-- Close form-group -->
  </form>
  </div>
  <!-- Close card-body -->
  </div>
  <!-- Close card -->
  </div>
  <!-- Close col-md-5 -->
  </div>
  <!-- Close row -->
  </div>
  <!-- Close container -->

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> 
   <script src="../scripts/app.js"></script>

</body>
</html>