<?php
session_start();

$year = $_SESSION['year'];
$sem = $_SESSION['semester'];
$course1 = $_SESSION['course'];

if(isset($_GET['delete'])) {

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

$sql = "DELETE FROM `attendance_taken` WHERE date='$ThisDate' AND department='$course1' AND semester='$sem' AND year='$year'";

if ($con->query($sql) === TRUE) {
   ?>
   <script>
      //window.location = "admin.php";
        if(!alert('attendance deleted successfully.')){window.location = "teacher_attendancepanel.php";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "attendancepanel.php";
          if(!alert('Can not delete attendance. Some error occurred')){window.location = "teacher_attendancepanel.php";}
   
     </script>
   <?php
   }

$conn->close();

			  }
?>