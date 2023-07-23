<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include("header.php");?>



<?php

//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
 ?>	

 <div class="container-fluid">

          <h1 class="h1_index text-center">Full Attendance</h1>
          <br>
   <center>
  <a href="admin_attf_print.php" target="_blank">
<input type="button" class="" value="Print">
</a>
</center>
   <br>		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>

		   <br>
<br><br>


		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Register Number</th>
        <th>Name</th>
        <th>Department</th>
        <th>Semester</th>
        <th>Year</th>
		<th>Date</th>
		<th>Present/Absent</th>
      <th>Edit</th>
		
      </tr>
    </thead>
    <tbody>
		
		
 <?php 
//select database

$sql="SELECT * FROM `attendance_taken` ORDER BY id ASC";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   
      <tr>
        <td><?php echo $post['reg_number']; ?></td>
        <td><?php echo $post['name']; ?></td>
        <td><?php echo $post['department']; ?></td>
        <td><?php echo $post['semester']; ?></td>
        <td><?php echo $post['year']; ?></td>
		<td><?php echo $post['date']; ?></td>
		<td><?php
      $status = $post['attendance'];
      if ($status == 1) {
         echo "Present";
     } elseif ($status == 0) {
         echo "Absent";
     } else {
         echo "No Data";
     }
      ?></td>
      <td><a href="admineditattendence.php?edit=<?php echo $post['id']; ?>">edit</a></td>
	   </tr>
              
      
<?php } ?>    

     </tbody>
    </table>
	</div>
   <br>
   <center>
  <a href="admin_attf_print.php" target="_blank">
<input type="button" class="" value="Print">
</a>
</center>
   <br>
<?php include("footer.php"); ?>

 <?php } ?>
 <style>
#scroll-to-top-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#scroll-to-top-button:hover {
    background-color: #0069d9;
}
</style>
<button id="scroll-to-top-button">Scroll to Top</button>
<script>
    // get the button element
    var button = document.getElementById("scroll-to-top-button");

    // add a click event listener to the button
    button.addEventListener("click", function() {
        // scroll to the top of the page
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    // hide the button when printing the screen
    window.addEventListener("beforeprint", function() {
        button.style.display = "none";
    });

    // show the button again after printing the screen
    window.addEventListener("afterprint", function() {
        button.style.display = "block";
    });
</script>
