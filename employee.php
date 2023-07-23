<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>


<?php include("header.php"); ?>


<?php

if(isset($_GET['insert_employee'])) {

?>   
<html>
  <head>
    
 </head>
 <div class="container-fluid" >

          <h1 class="h1_index text-center">Register Student</h1>
		
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>

		   <br><br><br>
</div>		   
   <div class="col-sm-10" >
     

<form  action="insertemployee.php" method="POST">

<div class="form-group">
   <label for="rnum">Register Number</label>
   <input type="text" name="rnum" class="form-control" id="rnum" placeholder="Register Number" required>
 </div>

 <div class="form-group">
   <label for="name">Name</label>
   <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
 </div><!-- -->

 <div class="form-group">
   <label for="course">Course</label>
   <select style="padding: 15px; background:#ffffff; width: 100%; margin: 0px 0 22px 0;" name="course" id="course" required>
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
   <input type="text" name="year" class="form-control" id="year" placeholder="Batch Year" required>

 </div>
 <div class="form-group">
   <label for="sem">Semester</label>
   <select name="sem" id="sem" required style="padding: 15px; background:#ffffff;  width: 100%; margin: 0px 0 22px 0;">
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
<?php } ?>

<!-- employee details -->

<?php


if(isset($_GET['view_employee'])) {

 ?> 

 <div class="container-fluid">

		   <br>
</div>

    <div class="container-fluid">

          <h1 class="h1_index text-center">Student Details</h1><br>
          <center>
  <a href="stu_details_print.php" target="_blank">
<input type="button" class="" value="Print">
</a>
</center><br>		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>


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
//select database


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

		<td><a href="editemployee.php?edit=<?php echo $post['id']; ?>">edit</a></td>
		<td><a href="deleteemployee.php?delete=<?php echo $post['id']; ?>">delete</a></td>
      </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>
<center>
  <a href="stu_details_print.php" target="_blank">
<input type="button" class="" value="Print">
</a>
</center>
<?php } ?>    

<!-- details end -->

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


<br><br><br><br>
<br><br><br><br>
<br><br>
</body>
</html>
<?php include("footer.php"); ?>