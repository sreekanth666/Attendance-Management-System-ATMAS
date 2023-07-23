

<?php include("header.php"); ?>


<?php

if(isset($_GET['insert_employee'])) {

?>   
 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Student Board</h1>
		
		    <a class="a_color" href="principal.php"><button type="button" class="btn btn-primary btn-lg">Principal Dashboard</button></a>

		   <br><br><br>
</div>		   
 

<?php } ?>

<!-- employee details -->

<?php


if(isset($_GET['view_employee'])) {

 ?> 

 <div class="container-fluid">
 <h1 class="h1_index text-center">Student Details</h1>

		   <br>
		    <a class="a_color" href="principal.php"><button type="button" class="btn btn-primary btn-lg">Principal Dashboard</button></a>

		   <br>
</div>

    <div class="container-fluid" >

          <center>
  <a href="stu_details_print.php" target="_blank">
<input type="button" class="" value="Print">
</a>
</center><br>

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
		<!-- <td><a href="editemployee.php?edit=<?php echo $post['id']; ?>">edit</a></td>
		<td><a href="deleteemployee.php?delete=<?php echo $post['id']; ?>">delete</a></td> -->
      </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php } ?>    
<center>
  <a href="stu_details_print.php" target="_blank">
<input type="button" class="" value="Print">
</a>
</center>

<!-- details end -->
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


<br><br>
<br><br>

<?php include("footer.php"); ?>