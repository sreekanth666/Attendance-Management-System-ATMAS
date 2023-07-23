

<?php include ("header.php") ?>


<div class="container-fluid" >

          <h1 class="h1_index text-center">Edit Attendance Details</h1>
           <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>
		   <br><br>
        <div class="col-sm-10">
		<!-- <h4>Note: Password is confidential hence can not be edited here if you want change then <a href="forgetpassword.php">Recover Password</a>.</h4> -->
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
      <th>ID</th>
        <th>Register Number</th>
        <th>Name</th>
		<th>Date</th>
		<th>Attendance</th>
    
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

$sql="SELECT * FROM `attendance_taken` WHERE id='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><input type="text" name="rno" class="form-control" id="formGroupExampleInput" value="<?php echo $post['reg_number']; ?>" placeholder="Register Number"></td></td>
        <td><input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo $post['name']; ?>" placeholder="Name"></td></td>
        <td><input type="text" name="date" class="form-control" id="formGroupExampleInput" value="<?php echo $post['date']; ?>" placeholder="Date"></td></td>
        <td><select name="attendance" id="attendance" required style="padding: 7px;   margin: 0px 0 0px 0;">
                <option value="<?php echo ($post['attendance'] == 1) ? 'Present' : (($post['attendance'] == 0) ? 'Absent' : 'No data'); ?>"><?php echo ($post['attendance'] == 1) ? 'Present' : (($post['attendance'] == 0) ? 'Absent' : 'No data'); ?></option>
                <option value="1">Present</option>
                <option value="0">Absent</option>
              </select></td></td>

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
   $date =  $_POST["date"];
   $atte  = $_POST['attendance'];
   

   
 

$sql1 = "UPDATE `attendance_taken` SET `reg_number`='$rno',`name`='$name',`date`='$date',`attendance`='$atte' WHERE id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Attendance details updated successfully.')){window.location = "admin.php?view_admin=view_admin";}
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



<?php include("footer.php"); ?>