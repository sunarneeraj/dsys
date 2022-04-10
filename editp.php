<?php
 
 $conn = mysqli_connect ("localhost","root","","db_connect");

if(isset($_POST['btn_update'])){
  $id= $_POST['rowid'];

  $fname = $_POST['fidName'];
  $email = $_POST['fidEmail'];
  $phone = $_POST['fidPhone'];
  $message = $_POST['fidMessage'];



  $query= "update tbl_contact set fidName ='$fname', fidEmail= '$email' , fidPhone= '$phone', fidMessage = '$message' where id= '$id'";
  $executeQ = mysqli_query($conn,$query);

  if($executeQ){
 
    $message = "Updated";
	header('location:adminPannel.php?message='.$message.'&&id='.$id);
	die();
  }

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
       
        <h2> welcome to Admin pannel </h2>
        <p class="lead" id="flash"><b> <u> <?php if(isset($_GET['message'])){echo $_GET['message'];} if(isset($_GET['error'])){echo $_GET['error'];} ?></u></b></p>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="POST" action="editp.php">
   

 <table border="1">
     <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th> phone </th>
     <th>Order</th>
   
     
    </tr>

  
<?php
   $rid = $_GET['id'];
   $query = "select *from tbl_contact where  id = '$rid' ";
  $runQ = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($runQ))  { ?>
<tr>
<td><input type="number" name="rowid" value="<?php echo $row['id'] ?>"></td>
<td><input type="text" name="fidName" value="<?php echo $row['fidName'] ?>"></td>
<td><input type="text" name="fidEmail" value="<?php echo $row['fidEmail'] ?>"></td>
<td><input type="number" name="fidPhone" value="<?php echo $row['fidPhone'] ?>"></td>
<td><input type="text" name="fidMessage" value="<?php echo $row['fidMessage'] ?>"></td>
<td><input type="submit" name="btn_update" value="update"></td>


</tr>


<?php }  ?>
 </table>

 
    <p>
      <input type="submit" name="btn_login" onclick="valid()" id="Submit" value="Log in on admin panel"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

