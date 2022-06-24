<?php 


if(isset($_POST['btn_register'])){

	$con = mysqli_connect('localhost', 'root', '','db_connect');
	
	$yourName = $_POST['fname'];
	$email = $_POST['email'];
$pwd = $_POST['password'];
$validQ = "select fidEmail from tbl_contact where fidEmail = '$email'";

$valid_sql =  mysqli_query($con, $validQ);


if($valid_sql->num_rows !=0){  
    $error ='';
	$error = "Email already Exist";
	header('location:register.php?message='.$error);
	die();}

	$query = "insert into tbl_contact (fidName,fidEmail,password)values('$yourName','$email','$pwd')";

	$runq = mysqli_query($con ,$query);

	if($runq){
		$res = "registered ";
		header("location:login.php?message=".$res);
		die();
	}



}
?>

