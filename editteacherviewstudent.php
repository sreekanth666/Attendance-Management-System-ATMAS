

<?php include ("header.php") ?>


<div class="container-fluid" >

          <h1 class="h1_index text-center">Update Student Details.</h1>
          <br>
		    <a class="a_color" href="teacher.php"><button type="button" class="btn btn-primary btn-lg">Teacher Dashboard</button></a>
		   <br>
        <div class="col-sm-10">
		
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
        <td><input type="text" name="course" class="form-control" id="formGroupExampleInput" value="<?php echo $post['course']; ?>" placeholder="Course" required></td></td>
		<td><input type="text" name="year" class="form-control" id="formGroupExampleInput" value="<?php echo $post['year']; ?>" placeholder="Year" required></td></td>
		<td><input type="text" name="semester" class="form-control" id="formGroupExampleInput" value="<?php echo $post['semester']; ?>" placeholder="Semester" required></td></td>
    <td><input type="text" name="password" class="form-control" id="formGroupExampleInput" value="<?php echo $post['password']; ?>" placeholder="Password" required></td></td>
		<td><input type="text" name="email" class="form-control" id="formGroupExampleInput" value="<?php echo $post['email']; ?>" placeholder="Email" required></td></td>
		<td><input type="text" name="phone" class="form-control" id="formGroupExampleInput" value="<?php echo $post['phone']; ?>" placeholder="Phone" required></td></td>
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
   $pass = $_POST['password'];
   $email  = $_POST['email'];
   $phone = $_POST['phone'];
   
 

   $sql1 = "UPDATE `student_reg` SET `reg_number`='$rno',`name`='$name',`course`='$course',`year`='$year',`semester`='$sem',`password`='$pass',`email`='$email',`phone`='$phone' WHERE id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Student details updated successfully.')){window.location = "teacher.php";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can't update Student details. Some error occurred")){window.location = "admin.php?view_employee=view_employee";}
   
     </script>
   <?php
   }
   

 
  
  }

?>



<?php include("footer.php"); ?>