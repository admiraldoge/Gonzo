<?php
/* Displays user information and some useful messages */
session_start();
include 'db.php';
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ||  $_SESSION['email']!=='admin@eshop.com') {
  $_SESSION['message'] = "You must log in as an admin to view this page!";
  header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $address = $_SESSION['address'];
    $phone = $_SESSION['phone'];
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add product</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
    .container{padding: 0px;}
    body{ background-color: #EEEEEE}
    .glyphicon .badge .navbar{font-size: 17px;}
    .navbar{font-size: 17px;}
    .badge{font-size: 17px;}
    th, td {padding: 15px;text-align: center;}
    table, th, td {border: 2px solid black;}
    input[type="number"]{width: 20%;}
    </style>

</head>
</head>
<body>
  <nav class="navbar navbar-inverse"  style="border-radius: 0px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">E-Shop</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?= $first_name?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </a></li>
      </ul>
    </div>
  </nav>

  <div class="container" style="margin:40px">

    <form class="form-horizontal" method="post" action="addproduct.php?action=addToProducts">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Product name:</label>
        <div class="col-sm-10">
          <input type="text" required class="form-control" name="name" id="name" placeholder="Enter Name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="description">Product description:</label>
        <div class="col-sm-10">
          <textarea required rows="3" class="form-control" name="description"
           id="description" placeholder="Enter description"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="price">Product price:</label>
        <div class="col-sm-10">
          <input type="number" required class="form-control" name="price" id="price" step="any" placeholder="Enter price">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>

</div>
</body>
</html>
