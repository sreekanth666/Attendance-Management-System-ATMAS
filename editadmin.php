<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>


<div class="container-fluid">

          <h1 class="h1_index text-center">Edit Teacher Details</h1>
           <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>
		   <br>
        <div class="col-sm-10">
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
      <th>Id</th>
        <th>Pen Number</th>
        <th>Name</th>
		<th>Department</th>
		<th>Email</th>
    <th>Password</th>
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

$sql="SELECT * FROM `teacher_reg` WHERE id='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><input type="text" name="pno" class="form-control" id="formGroupExampleInput" value="<?php echo $post['pen_number']; ?>" placeholder="Pen Number" required></td></td>
        <td><input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo $post['name']; ?>" placeholder="Name" required></td></td>
        <td>
        <select id="dep" name="dep" style="border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 5px; padding: 8px; font-size: 16px;" required>
                <option value="<?php echo $post['department']; ?>"><?php echo $post['department']; ?></option>
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
      </td></td>
        <td><input type="email" name="email" class="form-control" id="formGroupExampleInput" value="<?php echo $post['email']; ?>" placeholder="Email" required></td></td>
		<td><input type="text" name="password" class="form-control" id="formGroupExampleInput" value="<?php echo $post['password']; ?>" placeholder="Password" required></td></td>
    <td><input type="text" name="phone" class="form-control" id="formGroupExampleInput" maxlength="10" value="<?php echo $post['phone']; ?>" placeholder="Phone" required></td></td>

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

  $pno =  $_POST["pno"];
   $name =  $_POST["name"];
   $dep =  $_POST["dep"];
   $email  = $_POST['email'];
   $pass  = $_POST['password'];
   $phone  = $_POST['phone'];

   
 

$sql1 = "UPDATE `teacher_reg` SET `pen_number`='$pno',`name`='$name',`department`='$dep',`email`='$email',`phone`='$phone',`password`='$pass' WHERE id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Teacher details updated successfully.')){window.location = "admin.php?view_admin=view_admin";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Can't update admin details.Some error occured")){window.location = "admin.php?view_admin=view_admin";}
   
     </script>
   <?php
   }
   

 
  
  }

?>

<?php } ?>

<?php include("footer.php"); ?>