<!DOCTYPE html>
<html>
<head>
	<title>Complaint Details</title>
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
	<h2>Complaint Details</h2></center>
	<table>
		<tr>
			<th>Register Number</th>
			<th>Name</th>
			<th>Date</th>
			<th>Complaints</th>
		
		</tr>
		<?php
    session_start();
		if($_POST){
      
// create a database connection
$conn = mysqli_connect('localhost','root','','attendance');
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");

$temp_start = $_POST['date'];

$department = $_POST['course'];



$sql = "SELECT * FROM student_complaint WHERE date = '$temp_start' AND department = '$department'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['reg_number'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['complaint'] . "</td>";
    echo "</tr>";
  }

} else {
  echo "<center><h1>No complaints found for the selected date and department.</h1><center>";
}
    }
?>

	</table>
    <br><br><br>
    <center>
    <button onclick="window.print()">Print</button>
        </center>
</body>
</html>

</body>
</html>

