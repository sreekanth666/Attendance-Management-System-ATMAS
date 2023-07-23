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
	<h2></h2></center>
	<table>
		<tr>
			<th>Register Number</th>
      <th>Department</th>
			<th>Name</th>
			<th>Attendance</th>
			<th>Total Working Day</th>
			<th>APC</th>		
		
		</tr>
		<?php
		if($_POST){
// create a database connection
$conn = mysqli_connect('localhost','root','','attendance');
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
$ThisDate = date("d-m-Y", strtotime($date));

$temp_start = $_POST['start'];
$start = $formatted_date = date("d-m-y", strtotime($temp_start));
$temp_end = $_POST['end'];
$end = $formatted_date = date("d-m-y", strtotime($temp_end));
$semester = $_POST['semester'];
$year = $_POST['batch_year'];
$working_days=$_POST['working_days'];
// check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// query the attendance_taken table and calculate the sum of attendance for each register number
$sql = "SELECT name, semester, department, reg_number, SUM(attendance) AS total_attendance, ROUND((SUM(attendance) / $working_days * 100), 2) AS APC FROM attendance_taken WHERE semester = '$semester' AND year='$year' AND date BETWEEN '$start' AND '$end' GROUP BY reg_number";
$result = $conn->query($sql);
echo "<p><center><h2>";
echo "APC From ".$start." to ".$end;
echo "</p></center></h2>";
echo "<center>
<button onclick="; echo "window.print()"; echo ">Print</button>
    </center> <br>";


// check if any rows were returned
if ($result->num_rows > 0) {
    // output the data as a table
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["reg_number"] . "</td><td>" . $row["department"] . "</td><td>" . $row["name"] ."</td><td>" . $row["total_attendance"] ."</td><td>" . $working_days . "</td><td>" . $row["APC"] . "%</td></tr>";
    }
} else {
    echo "<center><b>No data found</b></center>";
}

// close the database connection
$conn->close();
		}
		else{
			echo "An error occurred";
		}
?>

	</table>
    <br><br><br>
    <center>
    <button onclick="window.print()">Print</button>
        </center>
</body>
</html>
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

