
<?php include("header.php"); ?>
 
 <div class="container-fluid" >
          <center>
          <h1>Enter Details of The Student</h1></center>
		   <br>
       <a class="a_color" href="teacher.php"><button type="button" class="btn btn-primary btn-lg">Teacher Dashboard</button></a>

		   <br><br><br>
</div>		   
   <div class="col-sm-10" >

<form  action="teacher_add_process.php" method="POST">

<div class="form-group">
   <label for="rnum">Register Number:</label>
   <input type="text" name="rnum" class="form-control" id="rnum" placeholder="Register Number" required>
 </div>

 <div class="form-group">
   <label for="name">Name</label>
   <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
 </div><!-- -->

 <div class="form-group">
   <label for="course">Course</label>
   <select style="padding: 15px; background:#ffffff;  width: 100%; margin: 5px 0 22px 0;" name="course" id="course" required>
                <option value="">Select course</option>
                <option value="BA English Language and Literature">BA English Language and Literature</option>
                <option value="BA Economics">BA Economics</option>
                <option value="BA History">BA History</option>
                <option value="BBA">BBA</option>
                <option value="BSc Statistics">BSc Statistics</option>
                <option value="BSc Psychology">BSc Psychology</option>
                <option value="BSc Mathematics">BSc Mathematics</option>
                <option value="BSc Computer Science">BSc Computer Science</option>
                <option value="BCom Finance">BCom Finance</option>
                <option value="MCom Marketing">MCom Marketing</option>
                <option value="MA Economics">MA Economics</option>
                <option value="MA History">MA History</option>
                <option value="MA English Language and Literature">MA English Language and Literature</option>
                <option value="MSc Psychology">MSc Psychology</option>
              </select>
             </div>

 <div class="form-group">
   <label for="year">Year</label>
   <input type="text" name="year" class="form-control" id="year" placeholder="Year" required>

 </div>
 <div class="form-group">
   <label for="sem">Semester</label>
   <select name="sem" id="sem" required style="padding: 15px; background:#ffffff; width: 100%; margin: 5px 0 22px 0;">
                <option value="">Select Semester</option>
                <option value="1">First Semester</option>
                <option value="2">Second Semester</option>
                <option value="3">Third Semester</option>
                <option value="4">Fourth Semester</option>
                <option value="5">Fifth Semester</option>
                <option value="6">Sixth Semester</option>
              </select>
   </div>

 <div class="form-group">
   <label for="email">Email</label>
   <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
 </div>

 <div class="form-group">
   <label for="phone">Phone Number</label>
   <input type="text" maxlength="10" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
 </div>  

 <div class="form-group">
   <label for="password">Password</label>
   <input type="text" name="password" class="form-control" id="password" placeholder="Password" required>
 </div>  
 
 
 
  <div class="form-group">
    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Submit</button>
  </div> 

   </form>
   

</div>



<?php


if(isset($_GET['view_employee'])) {

 ?> 

 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Student Board</h1>
          <h1 class="h1_index text-center">Student Details</h1>

		   <br>
		    <a class="a_color" href="teacher.php"><button type="button" class="btn btn-primary btn-lg">Teacher Dashboard</button></a>

		   <br>
</div>

    <div class="container-fluid" >


        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered">
   <thead>
   <tr>
      <th>ID</th>
        <th>Register_Number</th>
        <th>Name</th>
        <th>Course</th>
		<th>Year</th>
		<th>Semester</th>
		<th>Email</th>
		<th>Phone Number</th>
    <th>Password</th>
		<th>Edit</th>
		<th>Delete</th>
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


$sql="SELECT * FROM `student_reg` ";

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
    <td><?php echo $post['password']; ?></td>

		<td><a href="editemployee.php?edit=<?php echo $post['id']; ?>">Edit</a></td>
		<td><a href="deleteemployee.php?delete=<?php echo $post['id']; ?>">Delete</a></td>
      </tr>   
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php } ?>    

<!-- details end -->





<?php include("footer.php"); ?>