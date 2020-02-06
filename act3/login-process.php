<?php 

session_start();





if (isset($_POST['btnSubmit'])) {


$_SESSION['name'] = $_POST['txtName'];
$_SESSION['email']= $_POST['txtEmail'];
$_SESSION['pass'] = $_POST['txtPass'];
$_SESSION['num'] = $_POST['txtNum'];
$_SESSION['mess'] = $_POST['txtMess'];

header('location:login.php');

}





if(isset($_POST['btnLogin'])) {
	

	if($_SESSION['name']  == $_POST['txtUsername']){

		if($_SESSION['pass'] == $_POST['txtPassword']) {

			$_SESSION['message'] = "Login successfully"; 
		}else { 
			$_SESSION['message'] = "Incorrect password";


		}  
}else 
		$_SESSION['message'] = "This account does not exist!";

	}
		header("location:login.php"); 

 
?>  