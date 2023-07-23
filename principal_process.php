<?php 
session_start();
//make connection
$con = new mysqli('localhost','root','','attendance');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}
  
   
   $name =  $_POST["name"];
   $user =  $_POST["user"];
   $pass  = $_POST['pass'];
  
   $query="insert into principal(name,username,password)
   values('$name','$user','$pass')";
  
  $res=mysqli_query($con,$query);
if($res) { 
    
    echo "<script>window.open('principal_login.php','_self')</script>";
    $_SESSION['logged']=$email;
       }
else
     {
   echo "<script>alert('Username or password is wrong')</script>";
    }
?>

