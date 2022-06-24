
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
      <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="formInput.php?userid=<?php echo $_GET['userid'];?>">make order</a></li>
  <li><a href="track_order.php?userid=<?php echo $_GET['userid'];?>">view Order</a></li>
  <li><a href="admin_login.php">logout</a></li>
</ol>
      </div>
      <center>
      <h2 style="font-family:mono space; color:purple;"> Fill your information for registration </h2>
      </center>
<img src="goddes.jpg" width="120px" height="120px" border=2>

<body class="bg-light">

<div class="col-md-8 offset-md-2">
<div class="py-5 text-center">
       
     
  
  <form name="frmContact" class="needs-validation " method="post" action="contact.php">

 
 <div class="col-sm-6">
 
        <p class="lead"><b> <u> <?php if(isset($_GET['message'])){echo $_GET['message'];} if(isset($_GET['error'])){echo $_GET['error'];} ?></u></b></p>
      </div>
<fieldset><legend>  यदि तपाइ फर्म भर्न अशमर्थ हुनु भो मलाइ यो नम्बर मा सम्पर्क गर्नु होस ।  :- <u> ९८६४६०६१९० </u> </legend>
   
 <p><input type="number" name="userid" value='<?php echo $_GET['userid']; ?>' hidden>
      <label for="message"> <b>what goods do you want  to deliver </b>:- </label>
      <textarea name="txtMessage" class="form-control"  id="txtMessage"  placeholder="Order" required></textarea>
      
    <marquee direction=" right "  color="red"> If you are unabel to fill the form then contact me with this number :- <u>9864606190 </u></marquee>
    </p>
    <p>
      <label for="message"> <b>Contact No</b>:- </label>
      <textarea name="phone" class="form-control"  id="phone"  placeholder="contact No" required></textarea><br>
      
 
    </p>
    <p>
      <label for="message"> <b>where do you want  to deliver your Good </b>:- </label>
      <textarea name="address" class="form-control"  id="address"  placeholder="address" required></textarea>
      
 
    </p>

    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="click for order"  class="btn btn-primary btn-lg btn-block">
    </p>
 </div>
  </form>

</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<marquee style="font-family: Book Antiqua; color: #FFFFFF" bgcolor="#000080"  direction="right">Thank you for ordering </marquee>
</fieldset>
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>


