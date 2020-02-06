<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> CONTACT FORM</title>
	<style>
		*{
			font-family: 'Century Gothic'; 
			font-size: 20px;
			width: 300px;
}






	</style>

</head>
<body> 
<div class="form">
<form action="login-process.php" method="post" name="frmContact"> 
 
 <input type="text" name="txtName" placeholder="Name" required> 
 
 <input  type="email" name="txtEmail" placeholder="Email" required> 
 <input  type="password" name="txtPass" placeholder="Password" required>
 <input   type="contact" name="txtNum" placeholder="Contact No." required> 
 	<input  type="text" name="txtMess" placeholder="Message" required> 
 	 <input  type="Submit" value="Submit"  name="btnSubmit">
 	 <input  type="reset"  value="Clear" name="btnClear">



</form>
</div> 



	
</form>


</body>
</html>





<?php
/* Web-Developer : Sophia Borromeo 
   Date-Written: January 28 2020
   Description: home page 
   page: index.php*/ 

  /* $var = "<em>Sophia Borromeo</em>";

  echo '<h1> Hello '.$var.'</h1>';
  print('<h2> This is ma first php script owo</h2>');

  $value = 5; 
  $array=  array('car','house','money','dog');

  //$arrayName = array('' => , );*/
  


  /*if($value % 2 == 0){
  echo 'this is an even number';	

  }
 else{

 	echo 'this is an odd number';
 }*/ 

/*for($ctr= 0;$ctr<4;$ctr++){
 	echo 'Wish List '.$array[$ctr]. '<br>';

 }

 $cities = array('Marikina','Quezon','Makati','Pasig','Pasay','Mandaluyong');

 echo '<select>'; 

 		for($ctr=0;$ctr<6;$ctr++){
        echo'<option>'.$cities[$ctr]. '</option>'; 
}	

  echo '</select>'; 

  echo '<select>';

  $arrayName = array('Red'=>'Apple','Orange'=>'Carrot','Green' => 'Dahon'); 

  foreach ($arrayName as $key => $value) {
  	echo'<option value='.$key.'>' .$value. '</option>';
  
  }
echo '</select>';*/ 



?>