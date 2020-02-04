<?php 

session_start();


$_SESSION['username'] ="sophie"; 

$_SESSION['password'] = "123";



if(isset($_POST['btnLogin'])) {
	

	if($_POST['txtName'] == $_SESSION['username']){

	if($_POST['txtPass'] == $_SESSION['password']) {

		$_SESSION['message'] = "Login successfully"; 
	}else { 
		$_SESSION['message'] = "Incorrect password";


	}  
}else 
		$_SESSION['message'] = "This account does not exist!";

		header("location:login.php"); 
	}


	
?>  