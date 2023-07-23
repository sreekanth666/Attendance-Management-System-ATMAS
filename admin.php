<?php 
session_start();

// Redirect to login page if user is not logged in
if(!isset($_SESSION['name'])) {
    header("location: login.php");
    exit();
}

// Include header file
include("header.php");
?>

<html>
<head>
    <style>
    </style>
</head>

<body>
    <div class="col-sm-12">
        <h1 class="text-center">Admin Dashboard</h1>
    </div>

    <div class="col-sm-12 jumbo_user"> 
        <br>
        <center>
            <!-- Add student button -->
            <a class="a_color" href="employee.php?insert_employee=insert_employee">
                <button type="button" class="btn btn-primary btn-lg">Add Student</button>
            </a>

            <!-- Add teacher button -->
            <a class="a_color" href="insertadmin.php">
                <button type="button" class="btn btn-primary btn-lg">Add Teacher</button>
            </a>

            <!-- View all student details button -->
            <a class="a_color" href="employee.php?view_employee=view_employee">
                <button type="button" class="btn btn-primary btn-lg">View All Student Details</button>
            </a>

            <!-- View all teacher details button -->
            <a class="a_color" href="viewadmin.php?view_admin=view_admin">
                <button type="button" class="btn btn-primary btn-lg">View All Teacher Details</button>
            </a>

            <!-- View all principal details button -->
            <a class="a_color" href="viewprincipal.php?view_admin=view_admin">
                <button type="button" class="btn btn-primary btn-lg">View All Principal Details</button>
            </a>

            <!-- View attendance details button 
            <a class="a_color" href="viewattendanceadminfull.php">
                <button type="button" class="btn btn-primary btn-lg">View Attendance Details</button>
            </a>-->
            <a class="a_color" href="calculate_att_admin_entry.php">
                <button type="button" class="btn btn-primary btn-lg">Generate Report</button>
            </a>
            <a class="a_color" href="view_complaint.php"><button type="button" class="btn btn-primary btn-lg">View Complaint</button></a>

            <!-- Logout button -->
            <a class="a_color" href="logout.php">
                <button type="button" class="btn btn-primary btn-lg">Logout</button>
            </a>
        </center>
    </div>
</body>
</html>

<?php 
// Include footer file
include("footer.php");
?>
