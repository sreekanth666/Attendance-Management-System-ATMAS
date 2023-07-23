
<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>


<?php include("header.php"); ?>


<?php


if(isset($_GET['view_admin'])) {

 ?> 



    <div class="container-fluid">

          <h1 class="h1_index text-center">Principal Details</h1>
          
		  <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>
		   <br><br>
		   
        <div class="col-sm-10">
		<!-- <h4>Note: Password is confidential hence can not be viewed.</h4> -->
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
      <th>ID</th>
			<th>Pen Number</th>
			<th>Name</th>
			<th>Designation</th>
			<th>Username</th>
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


$sql="SELECT * FROM `principal` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['pen_number']; ?></td>
        <td><?php echo $post['name']; ?></td>
        <td><?php echo $post['designation']; ?></td>
        <td><?php echo $post['username']; ?></td>
        <td><?php echo $post['password']; ?></td>
		
		<td><a href="editprincipal.php?edit=<?php echo $post['id']; ?>">edit</a></td>
		<td><a href="deleteprincipal.php?delete=<?php echo $post['id']; ?>">delete</a></td>
      </tr>
     
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php 

} 

?>    

<!-- details end -->

<?php } ?>
<center>
  <a href="ppl_details_print.php" target="_blank">
<input type="button" class="" value="Print">
</a>
</center>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br>



<?php include("footer.php"); ?>