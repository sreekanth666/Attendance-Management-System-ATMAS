<?php include("header.php"); ?> 


    <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Student Details</h1>
		   <br>
<h4 class="text-center">Employee can find there Register Number here and can use Register Number to view there attendance</h4>
        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
      <th>ID</th>
        <th>Register Number</th>
        <th>Name</th>
        <th>Course</th>
		<th>Year</th>
		<th>Semester</th>
		<th>Email</th>
		<th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
		

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


$sql="SELECT * FROM `student_details` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
      <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['reg_number']; ?></td>
        <td><?php echo $post['name']; ?></td>
        <td><?php echo $post['course']; ?></td>
		<td><?php echo $post['year']; ?></td>
		<td><?php echo $post['semester']; ?></td>
		<td><?php echo $post['email']; ?></td>
		<td><?php echo $post['phone']; ?></td>
	   </tr>
     
<?php 

} 

?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php include("footer.php"); ?>   
