<?php




    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
		   
// sql to delete a record

$delete_id = @$_GET['delete'];

$sql = "DELETE FROM `teacher_reg` WHERE  id='$delete_id'";

//$sql .= "DELETE FROM `attendance_taken` WHERE  name='$delete_id'";

if ($con->query($sql) === TRUE) {
   ?>
   <script>
      //window.location = "admin.php";
        if(!alert('Teacher deleted successfully.')){window.location = "admin.php?view_employee=view_employee";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "attendancepanel.php";
          if(!alert('Can not delete Teacher.Some error occurred')){window.location = "admin.php?view_employee=view_employee";}
   
     </script>
   <?php
   }

$con->close();

			  
?>