<?php
 
 $conn = mysqli_connect ("localhost","root","","db_connect");
if(isset($_GET['btnclick'])){

  $id = $_GET['id'];

  $query = "delete from tbl_contact where id = '$id'";

  $runQ = mysqli_query($conn , $query);
  if($runQ){
    $message = "User ".$id."Deleted";
	header('location:adminPannel.php?message='.$message);
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
  
  <form name="frmContact" class="needs-validation " method="POST" action="action.php?action=login_check">
   

 <table border="1">
     <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th> phone </th>
     <th>edit</th>
     
    </tr>

    <?php 
 
  $query = "select *from tbl_contact ";

  $runQ = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($runQ)) {}?>

<?php
  $query = "select *from tbl_contact ";

  $runQ = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($runQ))  { ?>
<tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['fidName'] ?></td> 
<td><?php echo $row['fidEmail'] ?></td>   
<td><?php echo $row['fidPhone'] ?></td> 
<td><a href='adminPannel.php?btnclick=updateQuery&&id=<?php echo $row['id'];?>'> ^ </a></td>

</tr>


<?php }  ?>
 </table>

 
    <p>
      <input type="submit" name="btn_login" onclick="valid()" id="Submit" value="Click me to Contact"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

