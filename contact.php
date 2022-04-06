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

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];


$validQ = "select fidEmail from tbl_contact where fidEmail = '$txtEmail'";

$valid_sql =  mysqli_query($con, $validQ);



if($valid_sql->num_rows !=0){
	$error = "Email already exist ";
	header('location:formInput.php?message='.$error);
die();

}

// database insert SQL code
$sql = "INSERT INTO tbl_contact (fidName, fidEmail, fidPhone,fidMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);


if($rs)
{
	$message = "Inserted successfully";

	header('location:formInput.php?message='.$message);
}
}
else
{
	$error = "errors in Database ";
	header('location:formInput.php?message='.$error);
	
	
}
?>