<?php 
session_start();

       ?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance Report</title>
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
                font-family: "Arial";
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

        h2 {
            font-family: "Arial";
        }
        
    </style>
</head>
<body datetime="<?php echo date('Y-m-d H:i:s'); ?>">
    <center>
        <h2>Attendance Report</h2>
    </center>
    <table>
        <tr>
            <th>Reg Number</th>
            <th>Name</th>
            <th>Date</th>
            <th>Hours</th>
            <th>Attendance</th>

        </tr>
        <?php


        if ($_POST) {
            $conn = mysqli_connect('localhost', 'root', '', 'attendance');
            date_default_timezone_set('Asia/Kolkata');
            $date = date("Y-m-d");
        
            $start = $_POST['start'];
            $end = $_POST['end'];

            $semester = $_POST['semester'];
            $department = $_POST['department'];
            $year = $_POST['batch_year'];
            $rnum = $_SESSION['reg_number'];

            //$working_days = $_POST['working_days'];
        
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            $sql = "SELECT at.reg_number, at.name, at.date, GROUP_CONCAT(
              CASE WHEN at.attendance > 0 THEN at.hour END 
              ORDER BY at.hour ASC SEPARATOR ', '
          ) AS hours
          FROM attendance_taken at
          JOIN (
              SELECT reg_number, date
              FROM attendance_taken
              WHERE department = '$department'
                  AND semester = '$semester'
                  AND reg_number = '$rnum' -- Add condition for registration number
                  AND date BETWEEN '$start' AND '$end' -- Add condition for date range
              GROUP BY reg_number, date
          ) AS a ON at.reg_number = a.reg_number AND at.date = a.date
          WHERE at.department = '$department'
              AND at.semester = '$semester'
              AND at.reg_number = '$rnum' -- Add condition for registration number
              AND at.date BETWEEN '$start' AND '$end' -- Add condition for date range
          GROUP BY at.reg_number, at.date;";
    
        
            $result = $conn->query($sql);
        
           
        
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["reg_number"] . "</td><td>" . $row["name"] . "</td><td>" . $row["date"] . "</td><td>" . $row["hours"] . "</td><td></td></tr>";
                }
            } else {
                echo "<center><b>No data found</b></center>";
            }
        
            $conn->close();
        } else {
            echo "An error occurred";
        }
        ?>
    </table>
    <br>
    <center>
        <button onclick="window.print()">Print</button>
    </center><br>
    <center>
    <footer>
  <style>
    .disclaimer {
      font-family: Arial, sans-serif;
      font-size: 10px;
    }
    .disclaimer .alpha-stage {
      color: red;
    }
  </style>
  <div class="disclaimer">
    <b><p>Disclaimer: <span class="alpha-stage">Alpha Stage Software</span></p></b>
    <p>Please be advised that the software generating this report is currently in the alpha stage of development. As such, it may contain numerous errors, inaccuracies, or inconsistencies. This report is provided for informational purposes only, and its content should be verified and cross-checked with reliable sources before making any decisions based on the information presented.<br>If you come across any errors or have concerns about the accuracy of the generated report, we kindly request that you contact the developers <a href="mailto:atmasgct@gmail.com">atmasgct@gmail.com</a>. Your feedback is greatly appreciated and will help us improve the software to provide more reliable and accurate results in the future.<br>Please note that while we strive to address any reported issues promptly, we cannot guarantee immediate responses or resolutions. We appreciate your understanding and patience as we work to enhance the software and deliver a more robust and dependable user experience.</p>
  </div>
</footer>
    </center>
</body>
</html>
