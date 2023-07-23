<?php include("header.php"); ?>

<?php 
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
?>

<style>
    @keyframes blink {
        50% {
            opacity: 0;
        }
    }
</style>

<div class="col-sm-12">
    <h1 class="text-center">Attendance Panel</h1>
    <br>
    <a href="teacher.php">
        <button type="button" class="btn btn-primary btn-lg">Teacher Dashboard</button>
    </a>
</div>

<div class="col-sm-12">
    <h4 class="text-center"></h4>
    <br>
    <h3 class="text-center">Today is <?php echo $date; ?></h3>
</div>

<?php 
session_start();
$year = $_SESSION['year'];
$sem = $_SESSION['semester'];
$course1 = $_SESSION['course'];
$logged = $_SESSION['logged'];
$hour = $_SESSION['hour'];
$con = mysqli_connect('localhost', 'root', '', 'attendance');

$sql = "SELECT * FROM attendance_taken WHERE date='$date' AND department='$course1' AND semester='$sem' AND year='$year'";
$result5 = mysqli_query($con, $sql);

if (mysqli_num_rows($result5) > 0) {
    // The entry exists, show success message
    // echo "<center><span style='color:red;font-weight:bold;animation:blink 1s infinite;'>Attendance for this date, department, and semester has been taken.</span><br><button type='button' onclick="; echo "window.location.href='deleteattendancetoday.php?delete=1'"; echo ">Delete Today's Attendance</button></center><br><br><br>";
} else {
    // The entry does not exist, show warning message
    // echo "<center>Attendance for this date, department, and semester has not been taken yet </center>";
}

$sql3 = "SELECT * from `teacher_reg`  WHERE email = '$logged'";
$result3 = mysqli_query($con, $sql3);
$row4 = mysqli_fetch_array($result3);
$pen_number = $row4['pen_number'];
$result = mysqli_query($con, "SELECT count(1) FROM student_reg WHERE course = '$course1' AND semester = '$sem' AND year = '$year'");
$row = mysqli_fetch_array($result);
$total = $row[0];
?>

<div class="fluid-container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Register Number</th>
                <th>Name</th>
                <th>Hour</th>
                <th>Present</th>
                <th>Absent</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //make connection
            $con = mysqli_connect('localhost', 'root', '', 'attendance');

            if ($con->connect_error) {
                die("connection error");
            } else {
                echo "";
            }

            //select database
            $sql = "SELECT * FROM `teacher_reg` WHERE email = '$logged'";
            $result1 = mysqli_query($con, $sql);

            if ($row = mysqli_fetch_array($result1)) {
                $sql1 = "SELECT * FROM `student_reg` WHERE course = '$course1' AND semester = '$sem' AND year = '$year'";
                $result = mysqli_query($con, $sql1);
                //echo $sql1;
            } else {
                echo "error";
            }

            while ($post = mysqli_fetch_assoc($result)) {
                ?>
                <form onsubmit="return validateForm()" action="insertattendance.php" method="post">
                    <input type="hidden" value="<?php echo $total; ?>" name="numbers" />
                    <input type="hidden" value="<?php echo $post['reg_number']; ?>" name="num[]" />
                    <input type="hidden" value="<?php echo $post['name']; ?>" name="name[]" />
                    <tr>
                        <td><?php echo $post['reg_number']; ?></td>
                        <td><?php echo $post['name']; ?></td>
                        <td>
                        <input type="hidden" name="hour[]" value="<?php echo $hour; ?>"><?php echo $hour; ?>
                        </td>
                        <td>
                            <label><input type="checkbox" name="attendance[]" value="1"></label>
                        </td>
                        <td>
                            <label><input type="checkbox" name="attendance[]" value="0"></label>
                        </td>
                    </tr>
                    <script>
    function validateForm() {
        var rows = document.querySelectorAll("tbody tr");

        for (var i = 0; i < rows.length; i++) {
            var checkboxes = rows[i].querySelectorAll("input[name='attendance[]']");
            var checkedCount = 0;

            for (var j = 0; j < checkboxes.length; j++) {
                if (checkboxes[j].checked) {
                    checkedCount++;
                }
            }

            if (checkedCount === 0) {
                alert("Please select either Present or Absent for all rows.");
                return false;
            } else if (checkedCount === checkboxes.length) {
                alert("Please select either Present or Absent, not both, for all rows.");
                return false;
            }
        }

        return true;
    }
</script>

                    <!-- function for today's date -->
                    <?php     
                    date_default_timezone_set('Asia/Kolkata');
                    $date = date("Y-m-d");

                    $tch_pen = $row['pen_number'];
                    $year = $_SESSION['year'];
                    $sem = $_SESSION['semester'];
                    $course1 = $_SESSION['course'];
                    ?>

                    <input type="hidden" value="<?php echo $date; ?>" name="date[]" />
                    <input type="hidden" value="<?php echo $tch_pen; ?>" name="teacher_pen[]" />
                    <input type="hidden" value="<?php echo $year; ?>" name="year[]" />
                    <input type="hidden" value="<?php echo $sem; ?>" name="semester[]" />
                    <input type="hidden" value="<?php echo $course1; ?>" name="department[]" />
                <?php
            }
            ?>
            <!-- while ended here -->
        </tbody>
    </table>
    <div class="form-group">
        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
    </form>
</div>

<!-- session Ended here -->
<?php include("footer.php"); ?>
