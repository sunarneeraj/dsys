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
  <body>
    <p align="center">
      <div class="container">

      <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="login.php">login</a></li>
  <li class="active">register</li>
</ol>
      </div>
      
      <marquee style=" margin-left:40px; color: blue"> register your detail </marquee>
    <h1 style="margin-left:40px; color:blue"><u>register form</u></h1>
     <h5 style="margin-left:40px; color:red"> <?php if(isset($_GET['message'])){echo $_GET['message'];} ?></h5>
    <div class="col-sm-6">

 
    <form method="post" action="action.php">
    <div class="col-sm-6">
    <div class="form-group">
<label> Your Name</label>
<input type="text" name="fname" class="form-control">
</div>
 <div class="form-group">
<label> Email</label>
<input type="email" name="email" class="form-control">
</div>
<div class="form-group">
<label> password</label>
<input type="password" name="password" class="form-control">
</div>

<input type="submit" value="register" name="btn_register">
  </div>
 

    </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</p>
  </body>
</html>