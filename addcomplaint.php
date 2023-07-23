
<?php include("header.php"); ?>
<?php
session_start();
$reg = $_SESSION['reg_number'];
?>
 
 <div class="container-fluid" >

          <h1 class="h1_index text-center">Register Complaint</h1>
		   <br>
		    <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">Student Dashboard</button></a>

		   <br>
</div>		   
   <div class="col-sm-10">
<br><br>
<form  action="add_complaint_process.php" method="POST">

<div class="form-group">
   <label for="formGroupExampleInput">Register Number</label>
   <input type="text" name="rnum" class="form-control" id="rnum" value="<?php echo $reg ?>" placeholder="Register Number" required readonly>
 </div>

 <div class="form-group">
   <label for="formGroupExampleInput">Name</label>
   <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
 </div>
 <div class="form-group">
   <label for="department">Department</label>
   <select style="padding: 15px; background:#ffffff;  width: 100%; margin: 5px 0 22px 0;" name="department" id="department" required>
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
 <label for="sem">Semester:</label>
   <select name="semester" id="semester" required style="padding: 15px; background:#ffffff; width: 100%; margin: 5px 0 22px 0;">
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
   <label for="formGroupExampleInput">Batch Year</label>
   <input type="text" name="year" class="form-control" id="name" placeholder="Batch Year" required>
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput">Complaint</label>
   <input type="text" name="complaint" class="form-control" id="complaint" placeholder="Complaint" required>
 </div>
  <div class="form-group">
    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Submit</button>
  </div> 

   </form>
   
</div>

<?php include("footer.php"); ?>