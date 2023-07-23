<?php 

 session_start();
 
 if(!isset($_SESSION['email']))
//   {
//     header("location: login.php"); 
//     }
//  else {


?>

<?php include ("header.php") ?>


<div class="col-sm-12">
</div>

<div class="col-sm-12 jumbo_user"> 
   <h1 class="text-center" >Teacher Dashboard</h1>
   <br>
  
<center>
   <a class="a_color" href="teacher_attendance_entry.php"><button type="button" class="btn btn-primary btn-lg">Take Attendance</button></a>
   
   <a class="a_color" href="teacher_tdattendance_entry.php"><button type="button" class="btn btn-primary btn-lg">Today's Attendance</button></a>
   
   <!--
   <a class="a_color" href="teacher_fullattendance_entry.php"><button type="button" class="btn btn-primary btn-lg">Complete Attendance</button></a>
-->
   <a class="a_color" href="teacher_add_stu.php"><button type="button" class="btn btn-primary btn-lg">Add Student</button></a>
   
   <a class="a_color" href="calculate_att_entry.php" target="_blank"><button type="button" class="btn btn-primary btn-lg">Generate APC</button></a>
   <a class="a_color" href="tch_individual_entry.php" target="_blank"><button type="button" class="btn btn-primary btn-lg">Individual APC</button></a>

    
   <a class="a_color" href="teacher_vattendance_entry.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">View Student</button></a>
   <a class="a_color" href="teacher_complaint_entry.php" target="_blank"><button type="button" class="btn btn-primary btn-lg">View Complaint</button></a>

   <a class="a_color" href="teacherlogout.php"><button type="button" class="btn btn-primary btn-lg">logout</button></a>
</center>
</div>

<?php include("footer.php") ?>