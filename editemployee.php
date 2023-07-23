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

<div class="container-fluid" >

          <h1 class="h1_index text-center">Update Student Details</h1>
          <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>
		   <br>
        <div class="col-sm-10" >
		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
      <th>ID</th>
        <th>Register Number</th>
        <th>Name</th>
        <th>Course</th>
		<th>Year</th>
		<th>Semester</th>
    <th>Password</th>

		<th>Email</th>
		<th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
		
  <form action="" method="post">
<?php


//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
//select database
$edit_id = @$_GET['edit'];

$sql="SELECT * FROM `student_reg` WHERE id='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><input type="text" name="rno" class="form-control" id="formGroupExampleInput" value="<?php echo $post['reg_number']; ?>" placeholder="Register Number" required></td></td>
        <td><input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo $post['name']; ?>" placeholder="Name" required></td></td>
        <td>
        <select style="padding: 8px; background:#ffffff; width: 100%; margin: 0px 0 22px 0; border-radius: 5px;" name="course" id="course" required>
                <option value="<?php echo $post['course']; ?>"><?php echo $post['course']; ?></option>
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
      </td>
		<td><input type="text" name="year" class="form-control" id="formGroupExampleInput" value="<?php echo $post['year']; ?>" placeholder="Year" required></td></td>
		<td>
    <select name="semester" id="semester" required style="padding: 8px; background:#ffffff; width: 100%; margin: 0px 0 22px 0; border-radius: 5px;" name="course" id="course" required>
                <option value="<?php echo $post['semester']; ?>"><?php echo $post['semester']; ?></option>
                <option value="1">First Semester</option>
                <option value="2">Second Semester</option>
                <option value="3">Third Semester</option>
                <option value="4">Fourth Semester</option>
                <option value="5">Fifth Semester</option>
                <option value="6">Sixth Semester</option>
              </select>
      
    <td><input type="text" name="password" class="form-control" id="formGroupExampleInput" value="<?php echo $post['password']; ?>" placeholder="Password" required></td></td>
		<td><input type="text" name="email" class="form-control" id="formGroupExampleInput" value="<?php echo $post['email']; ?>" placeholder="Email" required></td></td>
		<td><input type="text" maxlength="10" name="phone" class="form-control" id="formGroupExampleInput" value="<?php echo $post['phone']; ?>" placeholder="Phone Number" required></td></td>
      </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
	<div class="form-group">
    <button type="submit" name="update" value="update" class="btn btn-primary btn-lg">Update</button>
  </div>
   </form>
  </div>
</div>
</body>
</html>
  

<?php
if(isset($_POST['update'])) {

    $conn = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

 // $update_id = $_GET['id'];
  $update_id = @$_GET['edit'];

  $rno =  $_POST["rno"];
   $name =  $_POST["name"];
   $course  = $_POST['course'];
   $year  = $_POST['year'];
   $sem  = $_POST['semester'];
   $pass  = $_POST['password'];

   $email  = $_POST['email'];
   $phone = $_POST['phone'];
   
 

$sql1 = "UPDATE `student_reg` SET `reg_number`='$rno',`name`='$name',`course`='$course',`year`='$year',`semester`='$sem',`password`='$pass',`email`='$email',`phone`='$phone' WHERE id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Student details updated successfully.')){window.location = "admin.php?view_employee=view_employee";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Can't update Employee details.Some error occured")){window.location = "admin.php?view_employee=view_employee";}
   
     </script>
   <?php
   }
   

 
  
  }

?>

<?php } ?>

<?php include("footer.php"); ?>