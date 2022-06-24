<?php 


if(isset($_POST['user_btn_login'])){

  $con = mysqli_connect('localhost', 'root', '','db_connect');

if(!$con){

  $error ='';
$error = "errors in Database ";
header('location:login.php?message='.$error);
die();
}

// get the post records
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$validQ = "select fidEmail from tbl_contact where fidEmail = '$email'";

$valid_sql =  mysqli_query($con, $validQ);
if($valid_sql->num_rows ==0){  
  $error ='';
$error = "Email Not Exist";
header('location:login.php?message='.$error);
die();}

$query = "select fidEmail ,id, password from tbl_contact where fidEmail = '$email' && password ='$pwd'";


$conQuery = mysqli_query($con,$query);

$getuser = mysqli_fetch_assoc($conQuery);

$userid= $getuser['id'];

if($conQuery->num_rows !=0){  $error ='';
$message = "valid User ";
header('location:sample.php?userid='.$userid);
die();}else{
  $error ='';
$error = "Pasword and Email Invalid";
header('location:login.php?message='.$error);
die();}
}




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>index</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  
  </head>
  <body >
      <div class="container">
      <ol class="breadcrumb"><br><br><br>
  <li><a href="#">Home</a></li>
 
  <li><a href="admin_login.php">admin Pannel</a></li>
</ol>


<div class="col-lg-3 mb-4">
<div class="py-5 text-center">
       
        <h2>Login </h2>
        <p class="lead" id="flash"><b> <u> <?php if(isset($_GET['message'])){echo $_GET['message'];} if(isset($_GET['error'])){echo $_GET['error'];} ?></u></b></p>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="POST" action="login.php?action=login_check">
   
    <p>
      <label for="email">Your Email</label>
      <input type="text"  class="form-control"  name="email" id="email" placeholder="Email" value="" required>
    </p>
    <p>
      <label for="phone">Password</label>
      <input type="text"  class="form-control" name="pwd" id="pwd" placeholder="password" value="" required>
    </p>

    <p>&nbsp;</p>
    <p>
      <input type="submit" name="user_btn_login" onclick="valid()" id="Submit" value="Log in "  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>
      </div>

   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>

