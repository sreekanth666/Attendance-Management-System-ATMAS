<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
	<style>
        @media print {
  @page {
    size: A4;
    margin-top: 1cm;
    margin-bottom: 1cm;
    margin-left: 1cm;
    margin-right: 1cm;
  }

  body {
    margin: 0.5cm;
    font-family:"Arial";

  }
  .print-only {
    display: block;
  }


.print-only::before {
  content: "Printed on: " attr(datetime);
  text-align: center;
  font-weight: bold;
}
}
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		td, th {
			border: 1px solid;
			text-align: left;
			padding: 8px;
		}
		
        h2{
            font-family:"Arial";
        }
	</style>
</head>
<body datetime="<?php echo date('Y-m-d H:i:s'); ?>"><center>
	<h2>Student List</h2></center>
	<table>
		<tr>
			<th>ID</th>
			<th>Registration Number</th>
			<th>Name</th>
			<th>Course</th>
			<th>Year</th>
			<th>Semester</th>
			<th>Email</th>
			<th>Phone</th>
		
		</tr>
		<?php
		session_start();
		$year = $_SESSION['year'];
		$sem = $_SESSION['semester'];
		$course1 = $_SESSION['course'];
		//make connection
		$con = mysqli_connect('localhost','root','','attendance');
		if ($con->connect_error){
			die("connection error");
		}
		//select data from table
		$sql = "SELECT * FROM `student_reg` WHERE year='$year' AND semester='$sem' AND course='$course1'";
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
		<?php } ?>  
	</table>
    <br><br><br>
    <center>
    <button onclick="window.print()">Print Screen</button>
        </center>
</body>
</html>

</body>
</html>
