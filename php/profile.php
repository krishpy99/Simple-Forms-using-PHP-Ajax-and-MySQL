<?php
include "db.php";
if(!isset($_SESSION['name'])):
  header("location: login.php");
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi! <?php echo $_SESSION['name']; ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
</head>
<body><br>
  <div class=" mx-auto">
  <?php if(isset($_SESSION['created'])): ?>
    <div class="alert alert-success">
    <?php echo $_SESSION['created']; ?>
    </div>
<?php endif; ?>
<?php unset($_SESSION['created']); ?>
  <div class="container">
  <div class="row">
   <div class="col-md-12">
   <div class="jumbotron">
  <h1 class="display-3">Hello, <?php echo $_SESSION['name']; ?> </h1>
  <p>Here are your details</p>
  <table class="table">
    <tr>
      <th>Name</th>
      <td><?php echo $_SESSION['name']; ?></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><?php echo $_SESSION['email']; ?></td>
    </tr>
    <tr>
      <th>DOB</th>
      <td><?php echo $_SESSION['DOB']; ?></td>
    </tr>
    <tr>
      <th>Phone Number</th>
      <td><?php echo $_SESSION['phone']; ?></td>
    </tr>
    <tr>
      <th>Address</th>
      <td><?php echo $_SESSION['address']; ?></td>
    </tr>
  </table>

    <a class="btn btn-primary btn-lg" href="update.php" role="button">Update details</a>
    <br>
    <br>
    <a class="btn btn-primary btn-danger" href="logout.php" role="button">Logout</a>
  </p>
</div>
   </div>
  </div>
  <!-- Close row -->
  </div>
  <!-- Close container -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> 
   <script src="app.js"></script>
</body>
</html>