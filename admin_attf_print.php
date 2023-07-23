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
	<h2>Full Attendance</h2></center><br>
  <center>
    <button onclick="window.print()">Print</button>
        </center><br>
	<table>
		<tr>
		<th>Register Number</th>
        <th>Name</th>
        <th>Department</th>
        <th>Semester</th>
        <th>Year</th>
		<th>Date</th>
		<th>Attendance</th>
		
		
		</tr>
		<?php
		//make connection
		$con = mysqli_connect('localhost','root','','attendance');
		if ($con->connect_error){
			die("connection error");
		}
		//select data from table
		$sql = "SELECT * FROM `attendance_taken` ";
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
	   </tr>
		<?php } ?>  
	</table>
    <br><br><br>
    <center>
    <button onclick="window.print()">Print</button>
        </center>
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

</body>
</html>

</body>
</html>
