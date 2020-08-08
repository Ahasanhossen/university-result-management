<?php

session_start();
//header('location:Login.php');

$con = mysqli_connect('localhost','root');

if($con){
    echo "signup sucsessfull";
}else  {
    echo "no connection"; 
}
mysqli_select_db($con,'session');

$id = $_POST['id'];
$password = $_POST['password'];
$q = "SELECT * FROM signin where id = '$id' && password = '$password'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1){

header('location:signup.php');
}
else{

    $qy = "insert into signin(id, password) values ('$id', '$password')" ;
    mysqli_query($con,$qy);
}
?>
<script type="text/javascript">
	alert("signup sucsessfull");
	window.location.href="Login.php";
</script>