<?php 

//make connection
$con = new mysqli('localhost','root','','attendance');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}
    $num = $_POST['num'];
    $name = $_POST['name'];
    $dep = $_POST['dep'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query="insert into teacher_reg(pen_number,name,department,password,email,phone)
    values('$num','$name','$dep','$pass','$email','$phone')";
$res=mysqli_query($con,$query);
if($res) { 
    
    echo "<script>window.open('teacher_login.php','_self')</script>";
       }
else
     {
   echo "<script>alert('Username or password is wrong')</script>";
    }


?>





