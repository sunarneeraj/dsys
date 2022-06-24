<?php
 
 $conn = mysqli_connect ("localhost","root","","db_connect");
if(isset($_GET['btnclick'])){

  $id = $_GET['id'];

  $query = "delete from order_details where order_id = '$id'";

  $runQ = mysqli_query($conn , $query);
  if($runQ){
    $message = "order_id ".$id."Deleted";
	header('location:adminPannel.php?message='.$message);
	die();
  }

}
if(isset($_GET['dbtnclick'])){
  $id= $_GET['id'];

  $query= " ";
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
<h1 align="center" style="font-family:mono space; color:purple"> Welcome to Admin Pannel<h1>
      <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>

  <li><a href="login.php">logout</a></li>
</ol>
      
<div class="row">
  <div class="col-md-8 offset-md-2">
  <div class="py-5 text-center">
       
       <p class="lead" id="flash"><b> <u> <?php if(isset($_GET['message'])){echo $_GET['message'];} if(isset($_GET['error'])){echo $_GET['error'];} ?></u></b></p>
     </div>
<fieldset>
 
 <form name="frmContact" class="needs-validation " method="POST" action="action.php?action=login_check">
  

<table class="table table-border" style="font-size:18px;">
    <tr>
    <th>order_id</th>
    <th>Order Name</th>
    <th>order Status</th>
    <th> order Date </th>
    <th>user id </th>
    <th>Phone No</th>
    <th>Address</th>
    <th>edit</th><th>delete</th>
    
   </tr>

   <?php 

 $query = "select *from tbl_contact ";

 $runQ = mysqli_query($conn, $query);
 while ($row = mysqli_fetch_assoc($runQ)) {}?>

<?php
 $query = "select *from order_details ";

 $runQ = mysqli_query($conn, $query);
 while ($row = mysqli_fetch_assoc($runQ))  { ?>
<tr>
<td><?php echo $row['order_id'] ?></td>
<td><?php echo $row['order_item'] ?></td> 
<td><?php echo $row['order_status'] ?></td>   
<td><?php echo $row['order_date'] ?></td> 
<td><?php echo $row['userid'] ?></td> 
<td><?php echo $row['phone'] ?></td> 
<td><?php echo $row['address'] ?></td> 
<td><a href='editp.php?dbtnclick=updateQuery&&id=<?php echo $row['order_id'];?>'> ^ </a></td>
<td><a href='adminPannel.php?btnclick=updateQuery&&id=<?php echo $row['order_id'];?>'> ^ </a></td>

</tr>


<?php }  ?>
</table>


   <p>
     <input type="submit" name="btn_login" onclick="valid()" id="Submit" value="Log in on admin panel"  class="btn btn-primary btn-lg btn-block">
   </p>
 </form>
</fieldset>
  </div>
</div>

</div>

   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>


