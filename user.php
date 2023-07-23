<?php include("header.php"); ?>
<?php
session_start();
?>




<div class="container-fluid jumbo_user mx-auto">

   <h1 class="text-center" >Student Dashboard</h1>
   <br>

 <div class="rows"><center>
 <a class="a_color" href="stu_att_entry.php"><button type="button" class="btn btn-primary btn-lg">Check Attendance</button></a>

   
<a class="a_color" href="addcomplaint.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">Register Complaint</button></a>
<br>
<a class="a_color" href="studentlogout.php"><button type="button" class="btn btn-primary btn-lg">Logout</button></a>

</center>

  </div>

 </div>
 
 </div>






<?php include("footer.php"); ?>