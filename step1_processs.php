

<?php 

if(isset($_POST['step1'])) {

?>

<?php 
$con = new mysqli('localhost','root','','attendance');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}


	
     $user_name = $_POST['username'];
     $email = $_POST['email'];
	 

	 $query = "SELECT `name`, `email` FROM `admin` WHERE username='$user_name' AND email='$email'";
	 $result=mysqli_query($con,$query);
	 $nos = mysqli_num_rows($result);
	  

	   if ($nos)
      {
    
	 echo "<script>window.open('step2.php?step2=step2','_self')</script>";
  
       } 
   else {
    ?>
     <script>
          if(!alert("username or password is incorrect. Please Try again")){window.location = "forgetpassword.php";}
   
     </script>
   <?php
   }	
 
	  
   
	  
?>

<?php } ?>