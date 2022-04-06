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
$email = $_POST['Email'];
$pwd = $_POST['pwd'];
$validQ = "select fidEmail from tbl_contact where fidEmail = '$email'";

$valid_sql =  mysqli_query($con, $validQ);
if($valid_sql->num_rows ==0){  
    $error ='';
	$error = "Email Not Exist";
	header('location:login.php?message='.$error);
	die();}

$query = "select fidEmail  password from tbl_contact where fidEmail = '$email' && password ='$pwd'";

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