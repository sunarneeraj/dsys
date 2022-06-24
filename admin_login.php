<?php


if(isset($_POST['btn_login'])){

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

$validQ = "select email from admin_tbl where email = '$email'";

$valid_sql =  mysqli_query($con, $validQ);
if($valid_sql->num_rows ==0){  
  $error ='';
$error = "Email Not Exist";
header('location:login.php?message='.$error);
die();}

$query = "select email  password from admin_tbl where email = '$email' && password ='$pwd'";

$conQuery = mysqli_query($con,$query);


if($conQuery->num_rows !=0){  $error ='';
$message = "valid User ";
header('location:adminPannel.php?message='.$message);
die();}else{
  $error ='';
$error = "Pasword and Email Invalid";
header('location:login.php?message='.$error);
die();}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> first attempt </title>
<link href="style.css"rel="stylesheet">
</head><br><br>
<h1> <marquee>Title  </marquee> </h1>
<h2> Welcome to Dashboard </h2>
<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
       
        <h2>Login </h2>
        <p class="lead" id="flash"><b> <u> <?php if(isset($_GET['message'])){echo $_GET['message'];} if(isset($_GET['error'])){echo $_GET['error'];} ?></u></b></p>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="POST" action="admin_login.php?action=login_check">
   
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
      <input type="submit" name="btn_login" onclick="valid()" id="Submit" value="Log in "  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

<script>


  function valid(){

  }
    </script>