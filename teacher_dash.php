<?php include("header.php"); ?>




<div class="container-fluid jumbo_user mx-auto">

  <h2 class="text-center">Teacher Dashboard</h2>

   <br>


 <div class="rows">
 
  <div class=>
    <h3 class="text-center"><?php     
     date_default_timezone_set('Asia/Kolkata');
	           $date = date("Y-m-d");
               $ThisDate = date("d-m-Y", strtotime($date));
               echo "Today is ".$ThisDate;
     ?></h3>
	<br><center>
    <a class="a_color"  href="teacher.php"><button type="button" class="btn btn-primary btn-lg">Enter</button></a>
</center>
  </div>
  
  
 </div>
 
 </div>






<?php include("footer.php"); ?>