

<?php include("header.php");?>



<?php
session_start();
//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
    $year = $_SESSION['year'];
$sem = $_SESSION['semester'];
$course1 = $_SESSION['course'];
	
 ?>	

 <div class="container-fluid" >

          <h1 class="h1_index text-center">Attendance can be seen below</h1>
		  <br>
		    <a class="a_color" href="teacher.php"><button type="button" class="btn btn-primary btn-lg">Teacher Dashboard</button></a>

		   <br><br>

		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Register Number</th>
        <th>Name</th>
		<th>Date</th>
		<th>Present/Absent</th>
      </tr>
    </thead>
    <tbody>
		
		<?php 
	      date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
          ?>
 <?php 
//select database

//$sql="SELECT * FROM `attendance_taken` WHERE year='$year' AND semester='$sem' AND department='$course1' ORDER BY id ASC";

$sql = "SELECT at.reg_number, at.name, at.date, GROUP_CONCAT(DISTINCT CASE WHEN at.attendance = 1 THEN at.hour END ORDER BY at.hour ASC SEPARATOR ', ') AS hours
                    FROM attendance_taken at
                    WHERE at.department = '$course1'
                        AND at.semester = '$sem'
                        AND at.year = '$year'
                        AND at.date = '$date'
                    GROUP BY at.reg_number, at.date";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   
      <tr>
        <td><?php echo $post['reg_number']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['date']; ?></td>
		<td><?php echo $post['hour']; ?></td>
	   </tr>
              
      
<?php } ?>    

     </tbody>
    </table>
	</div>
   

<?php include("footer.php"); ?>

