<?php session_start(); 
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up </title> 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 


	<?php 
	
		if(isset($_SESSION['message'])){
				?>
					<div class="message"> <?php  echo$_SESSION['message']; ?> </div> 

 <?php
}
	?> 

<section class="form"> 

	 <h1>Login</h1>
	 	



	 <div> 
	 	<section class="hi">
	 		<a href="https://www.facebook.com" class="hi">Login with Facebook</a> 
	 		<br>
	 		<a href="https://www.twitter.com" class="hi">Login with Twitter</a>
			</section>


	 </div> 
	
<h4> 	 Login with Email </h4>
<form  name="contactForm" action="login-process.php" method="post">  
<div class="body">
			<input class="heh" type="text" name="txtUsername" placeholder="Email" required>  
			<br> 
			<input  class="heh" type="password"  name="txtPassword" placeholder="Password" required> 
</div>  

<div class="btns">
			<input type="submit" value="Login" name="btnLogin">  
	
</div>
</form>
</section>
<?php session_destroy();?>
</body>

</html>





