<?php
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
$ThisDate = date("d-m-Y", strtotime($date));
if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

    $rno =  $_POST["rnum"];
    $name =  $_POST["name"];
    $comp =  $_POST["complaint"];
    $dep =  $_POST["department"];
    $sem =  $_POST["semester"];
    $year =  $_POST["year"];
    $date = $ThisDate;

    $query="INSERT INTO `student_complaint`(`reg_number`, `name`, `department`, `semester`, `year`, `complaint`,`date`) 
    VALUES ('$rno','$name','$dep','$sem','$year','$comp','$date')";

    $res=mysqli_query($con,$query);
    if($res) { 
        echo "<script>alert('Complaint submitted and it will be escalated soon'); window.open('user.php','_self')</script>";
    }
    else {
        echo "<script>alert('Adding complaint failed')</script>";
    }
}
?>
