<html>
    <title>track Order</title>
<head></head>
<body>




</body>
</html>



<!doctype html>
<html lang="en">
 
<link href="style.css"rel="stylesheet">
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
      <div class="container">

      <ul class="breadcrumb">
  <ui><a href="#">Home</a></ui>
  <ui><a href="formInput.php?userid=<?php echo $_GET['userid'];?>">make order</a></ui>
  <ui><a href="track_order.php?userid=<?php echo $_GET['userid'];?>">view Order</a></ui>
  <ui><a href="admin_login.php">logout</a></ui>
</ol>
      </div>

   
     <div class="col-sm-12">


     <table border="1">
     <tr>
     <th>OrderId</th>
     <th>Order_item</th>
     <th>Order Status</th>
     <th> Order_date </th>
     <th>Address</th>
   
   
     
    </tr>

  
<?php
    $conn = mysqli_connect('localhost', 'root', '','db_connect');
   $rid = $_GET['userid'];
   $query = "select *from order_details where  userid = '$rid' and order_status = 'inprocess'";
  $runQ = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($runQ))  { ?>
<tr>
<td><input type="number" name="rowid" value="<?php echo $row['order_id'] ?>"></td>
<td><input type="text" name="order_item" value="<?php echo $row['order_item'] ?>"></td>
<td><input type="text" name="order_status" value="<?php echo $row['order_status'] ?>"></td>
<td><input type="text" name="order_date" value="<?php echo $row['order_date'] ?>"></td>
<td><input type="text" name="address" value="<?php echo $row['address'] ?>"></td>


<!-- <td><input type="submit" name="btn_update" value="update"></td> -->


</tr>


<?php }  ?>
 </table>

     </div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>


