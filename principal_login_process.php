<?php 

//make connection
$con = new mysqli('localhost','root','','attendance');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}

$user  = $_POST["user"];
$pass  = $_POST["pass"];

$query="select * from principal where username='$user' && password='$pass'";
$res=mysqli_query($con,$query);

if(mysqli_num_rows($res) > 0) { 
    echo "<script>window.open('principal.php','_self')</script>";
}
else {
    echo "<script>alert('Email or password is wrong')</script>";
    echo "<script>window.open('principal_login.php','_self')</script>";
}
?>
