<?php include("header.php");?>


<div class="container-fluid view_user">

 <div class="col-sm-12">
  <h2 class="text-center">View Attendace</h2>
  <p class="text-center">Enter your Register Number and submit.</p>
 </div> 
 <div class="col-sm-12 user_form_color">
 
  <form class="form-inline" action="" method="post">
    <div class="form-group">
      <label for="email">Reg No:</label>
      <input type="text" class="form-control" name="reg_number" placeholder="Enter Register Number" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  
 </div>  
</div>



<?php

 if(isset($_POST['reg_number'])) {
	 
//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
 ?>	
 <?php 
             $rno = $_POST['reg_number'];
	          $con = mysqli_connect('localhost','root','','attendance');
              $result = mysqli_query($con,"SELECT * FROM `attendance_taken` WHERE reg_number='$rno'");
			  $row = mysqli_fetch_array($result);
			  $total = $row[0];
			  $today = strval($total);
              if ($total == 0){
				  ?>
			  <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Eid is wrong.Please reconfirm EID then try again ")){window.location = "viewattendanceuser.php";}
   
              </script>	  
			  <?php } 
			  
			  else {
				  ?>
 <div class="container-fluid MT-10" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Attendance can be seen below.</h1>
		   <br>
		    <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">User Dashboard</button></a>

		   <br><br>


		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Register Number</th>
        <th>Name</th>
		<th>Date</th>
		<th>Present/Abscent</th>
      </tr>
    </thead>
    <tbody>
		
 <?php 
//select database
$rno = $_POST['reg_number'];

$sql="SELECT * FROM `attendance_taken` WHERE reg_number='$rno' ORDER BY id ASC";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['reg_number']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['date']; ?></td>
		<td><?php echo $post['attendance']; ?></td>
	   </tr>
              
      
<?php } ?>    
     </tbody>
    </table>
	</div>
	
	
   
  <?php } ?>
 
 <?php } ?>
 
 <div class="container-fluid">
	  <div class="col-sm-6">
	    <h3>Attendace of three months :</h3><p>( will be updated on completion of three months of classes).</p>. 		
	  </div>
	  
	  <div class="col-sm-6">
	    <h3>total semester attendace :</h3><p>( will be updated on completion of semester.).</p>. 
	  </div>
	</div>



<?php include("footer.php"); ?>