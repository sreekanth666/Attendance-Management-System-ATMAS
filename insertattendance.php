<?php
session_start();

// Check if the POST request has been submitted
if (isset($_POST['submit'])) {

    // Connect to the database
    $con = mysqli_connect('localhost', 'root', '', 'attendance');

    // Check if the connection was successful
    if ($con->connect_error) {
        die("connection error");
    }

    // Check if the user has selected at least one student
    if ($_POST['numbers'] > 0) {

        // Build the SQL query
        $s = "INSERT INTO `attendance_taken` (`reg_number`, `name`, `date`, `attendance`, `hour`, `department`, `semester`, `year`, `teacher_pen`) VALUES";
        for ($i = 0; $i < $_POST['numbers']; $i++) {
            $s .= "('" . $_POST['num'][$i] . "','" . $_POST['name'][$i] . "','" . $_POST['date'][$i] . "','" . $_POST['attendance'][$i] . "','" . $_POST['hour'][$i] . "','" . $_POST['department'][$i] . "','" . $_POST['semester'][$i] . "','" . $_POST['year'][$i] . "','" . $_POST['teacher_pen'][$i] . "'),";
        }
        $s = rtrim($s, ",");

        // Execute the SQL query
        if (mysqli_query($con, $s)) {
            // Success!
            echo "<script>alert('Attendance added successfully.');</script>";
            echo "<script>window.location = 'teacher.php';</script>";
            exit;
        } else {
            // Error!
            echo "<script>alert('Can not add attendance. Some error occurred.');</script>";
            echo "<script>window.location = 'teacher.php';</script>";
            exit;
        }

    } else {
        // Error!
        echo "<script>alert('Can not add attendance. Please select at least one student.');</script>";
        echo "<script>window.location = 'teacher.php';</script>";
        exit;
    }
}

?>
