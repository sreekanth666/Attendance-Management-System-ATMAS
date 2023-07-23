<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>

<html>
  <head>
    <style>
  
 </style>
 </head>
<div class="col-sm-12"> 

      <h1 class="text-center" >Register Teacher</h1>
      <h3 class="text-center">Enter the details of new Teacher</h3>

  <br>
  

   <a href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>

</div>  



   <div class="col-sm-6">

<form  action="" method="POST">

<div class="form-group">
   <label for="pno">Pen Number</label>
   <input type="text" name="pno" class="form-control" id="pno" placeholder="Pen Number" required>
 </div>

 <div class="form-group">
   <label for="name">Name</label>
   <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
 </div>
 
 <div class="form-group">
   <label for="dep">Department</label>
   <select style="padding: 15px; background:#ffffff; width: 100%; margin: 5px 0 22px 0;" name="dep" id="dep" required>
                <option value="">Select Department</option>
                <option value="BA English Language and Literature">BA English Language and Literature</option>
                <option value="BA Economics">BA Economics</option>
                <option value="BA History">BA History</option>
                <option value="BBA">BBA</option>
                <option value="BSc Statistics">BSc Statistics</option>
                <option value="BSc Psychology">BSc Psychology</option>
                <option value="BSc Mathematics">BSc Mathematics</option>
                <option value="BSc Computer Science">BSc Computer Science</option>
                <option value="BCom Finance">BCom Finance</option>
                <option value="MCom Marketing">MCom Marketing</option>
                <option value="MA Economics">MA Economics</option>
                <option value="MA History">MA History</option>
                <option value="MA English Language and Literature">MA English Language and Literature</option>
                <option value="MSc Psychology">MSc Psychology</option>
              </select>
 </div><!-- -->

 <div class="form-group">
   <label for="email">Email</label>
   <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
 </div>
 <div class="form-group">
   <label for="phone">Phone Number</label>
   <input type="text" maxlength="10" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
 </div>

 <div class="form-group">
   <label for="pass">Password</label>
   <input type="text" name="pass" class="form-control" id="pass" placeholder="Password" required>
 </div>

 
 
 
  <div class="form-group">
    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">submit</button>
  </div> 

   </form>
   

</div>
      </body>
      </html>

<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

  
    
  $pno =  $_POST["pno"];
   $name =  $_POST["name"];
   $dep =  $_POST["dep"];
   $email =  $_POST["email"];
   $phone  = $_POST['phone'];
   $pass  = $_POST['pass'];
 



  $sql = "INSERT INTO `teacher_reg`(`Pen_number`,`name`, `department`, `email`, `phone`, `password`) VALUES ('$pno','$name','$dep','$email','$phone','$pass')";

  
   



   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Teacher added Successfully.')){window.location = "insertadmin.php";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Can not add new admin. Some error occurred")){window.location = "admin.php";}
   
     </script>
   <?php
   }	 

  
  }

?>

<?php } ?>


<?php include ("footer.php") ?>
