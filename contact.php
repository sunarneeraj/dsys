<?php
// database connection code
if(isset($_POST['Submit']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_connect');

if(!$con){

	$error = "errors in Database ";
	header('location:formInput.php?message='.$error);
	die();
}
// get the post records

$userid = $_POST['userid'];
$txtMessage = $_POST['txtMessage'];
$address = $_POST['address'];
$phone = $_POST['phone'];



// database insert SQL code
$sql = "INSERT INTO order_details (order_item, order_status,address,userid,phone) VALUES ('$txtMessage','inprocess','$address','$userid','$phone')";

// insert in database 
$rs = mysqli_query($con, $sql);


if($rs)
{
	$message = "Inserted successfully";

	header('location:formInput.php?message='.$message.'&&userid='.$userid);
}
}
else
{
	$error = "errors in Database ";
	header('location:formInput.php?message='.$error);
	
	
}
?>