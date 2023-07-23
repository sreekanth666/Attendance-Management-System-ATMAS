<?php
session_start();


// make database connection
$con = mysqli_connect('localhost', 'root', '', 'attendance');
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
echo "check";
// check if the form is submitted
if (isset($_POST['submit'])) {
  echo "check";

    // get the email and password from the form
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // check if the email and password match in the database
    $query = "SELECT * FROM student_reg WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        // login successful, set session variables and redirect to user.php
        $_SESSION['email'] = $email;
        if (mysqli_num_rows($result) > 0) {
          // loop through the rows
          while ($row = mysqli_fetch_assoc($result)) {
              // store the value of name into $name
              $_SESSION['year'] = $row["year"];
              $_SESSION['department'] = $row["course"];
              $_SESSION['semester'] = $row["semester"];
              $_SESSION['reg_number'] = $row["reg_number"];
              $_SESSION['logged']=$email;
          }
      }
        header('Location: user.php');
        exit;
    } else {
        // login failed, redirect to student_login.php with error message
        $_SESSION['error'] = 'Invalid email or password';
        header('Location: student_login.php');
        exit;
    }
}
?>
