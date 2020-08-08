<?php

/*session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}*/
 header('location:Home.php');

$con = mysqli_connect('localhost','root');

if($con){
    echo "signup sucsessfull";
}else  {
    echo "no connection"; 
}
mysqli_select_db($con,'session');

$id = $_POST['id'];
$pass = $_POST['password'];
$q = "SELECT * FROM signin where id = '$id' && password = '$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1){
	echo "Login sucsessfull";

 header('location:Home.php');
}
else{
	echo "password or user id does't match";
 header('location:Login.php');
   
}
?>