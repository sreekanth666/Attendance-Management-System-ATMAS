<?php
if(isset($_POST['submit'])) {
  $con = mysqli_connect('localhost','root','','attendance');
  if ($con->connect_error){
      die("connection error");
  } else {
      echo "";
  }

  $rno =  $_POST["rnum"];
  $name =  $_POST["name"];
  $course =  $_POST["course"];
  $year  = $_POST['year'];
  $sem  = $_POST["sem"];
  $pass  = $_POST["password"];
  $email  = $_POST["email"];
  $phone  = $_POST["phone"];

  // check if reg_number already exists
  $check_query = "SELECT reg_number FROM student_reg WHERE reg_number='$rno'";
  $check_result = mysqli_query($con, $check_query);

  if (mysqli_num_rows($check_result) > 0) {
    // duplicate entry found
    echo "<script>alert('Data already exists for registration number: $rno'); window.location='teacher_add_stu.php';</script>";
  } else {
    // insert new record
    $sql = "INSERT INTO student_reg(reg_number,name,course,year,semester,password,email,phone) VALUES('$rno','$name','$course','$year','$sem','$pass','$email','$phone')";
  
    if (mysqli_query($con,$sql)) {
      ?>
      <script>
        if(!alert('Student added successfully.')){window.location = "teacher_add_stu.php";}
      </script>
      <?php
    } else {
      ?>
      <script>
        if(!alert("Can not add student. Some error occurred")){window.location = "teacher.php";}
      </script>
      <?php
    }
  }
}
?>
