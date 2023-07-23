<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>


<div class="container-fluid">

          <h1 class="h1_index text-center">Edit Principal Details</h1>
           <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>
		   <br><br>
       <br>
        <div class="col-sm-10">
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
      <th>ID</th>
       <th>Pen Number</th>
        <th>Name</th>
        <th>Designation</th>
		<th>Username</th>
    <th>Password</th>

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

$sql="SELECT * FROM `principal` WHERE id='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><input type="text" name="pen_number" class="form-control" id="formGroupExampleInput" value="<?php echo $post['pen_number']; ?>" placeholder="username" required></td></td>

        <td><input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo $post['name']; ?>" placeholder="name" required></td></td>
        <td><input type="text" name="des" class="form-control" id="formGroupExampleInput" value="<?php echo $post['designation']; ?>" placeholder="username" required></td></td>

        <td><input type="text" name="user" class="form-control" id="formGroupExampleInput" value="<?php echo $post['username']; ?>" placeholder="username" required></td></td>
        <td><input type="text" name="pass" class="form-control" id="formGroupExampleInput" value="<?php echo $post['password']; ?>" placeholder="username" required></td></td>

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

  $name =  $_POST["name"];
   $user =  $_POST["user"];
   $pass =  $_POST["pass"];
   $des =  $_POST["des"];
   $pno =  $_POST["pen_number"];
  

   
 

$sql1 = "UPDATE `principal` SET `name`='$name',`username`='$user',`password`='$pass',`designation`='$des',`pen_number`='$pno',`password`='$pass' WHERE id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Principal details updated successfully.')){window.location = "admin.php?view_admin=view_admin";}
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