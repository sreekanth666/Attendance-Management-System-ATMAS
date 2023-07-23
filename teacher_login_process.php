<?php
session_start();
// make database connection
$con = mysqli_connect('localhost', 'root', '', 'attendance');

// check if connection is successful
if (!$con) {
    die("Connection error: " . mysqli_connect_error());
}

// username and password stored in variables
$email = $_POST["email"];
$pass = $_POST["password"];


// select query to retrieve username and password from the teacher_reg table
$query = "SELECT * FROM teacher_reg WHERE email='$email' AND password='$pass'";

// execute the query
$result = mysqli_query($con, $query);

// check if query is successful and if a match is found
if ($result && mysqli_num_rows($result) > 0) {
    // match found
    $_SESSION['logged']=$email;
    echo "<script>window.open('teacher_dash.php','_self')</script>";
} else {
    // match not found
    echo "<script>alert('Email or Password is wrong')</script>";
    echo "<script>window.open('teacher_login.php','_self')</script>";
}

// close database connection
mysqli_close($con);
?>
