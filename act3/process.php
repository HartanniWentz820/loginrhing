<?php  session_start();

$_SESSION['username'] = $_SESSION['txtName'];

$_SESSION['password'] = $_SESSION['txtPass'];


if (isset($_POST['btnSubmit'])) {


$name = $_POST['txtName'] .'<br>';
$email= $_POST['txtEmail'].'<br>';
$pass = $_POST['txtPass'].'<br>';
$num = $_POST['txtNum'].'<br>';
$mess = $_POST['txtMess'] .'<br>';
}

header('location:login.php');

/*if (isset($_POST['btnSubmit'])) {


echo $_POST['txtName'] .'<br>';
echo $_POST['txtEmail'].'<br>';
echo $_POST['txtPass'].'<br>';
echo $_POST['txtNum'].'<br>';
echo $_POST['txtMess'] .'<br>';
}

header('location:login.php');
*/

?>



