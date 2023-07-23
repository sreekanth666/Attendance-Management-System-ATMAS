<?php 

//make connection
$con = new mysqli('localhost','root','','attendance');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}
  
    $rno =  $_POST["regno"];
   $name =  $_POST["name"];
   $course =  $_POST["course"];
   $year  = $_POST['year'];
   $sem  = $_POST["sem"];
   $pass  = $_POST["pass"];
   $email  = $_POST["email"];
   $phone  = $_POST["phone"];

   $query="insert into student_reg(reg_number,name,course,year,semester,password,email,phone)
   values('$rno','$name','$course','$year','$sem','$pass','$email','$phone')";
  
  $res=mysqli_query($con,$query);
if($res) { 
    
    echo "<script>window.open('student_login.php','_self')</script>";
       }
else
     {
   echo "<script>alert('Username or password is wrong')</script>";
    }
?>