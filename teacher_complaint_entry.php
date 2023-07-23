

<?php 
session_start();
$logged=$_SESSION['logged'];
      $con = mysqli_connect('localhost','root','','attendance');
      $sql3 = "SELECT * from `teacher_reg`  WHERE email = '$logged'";
      $result3 = mysqli_query($con, $sql3);
      $row4=mysqli_fetch_array($result3);
      $dep=$row4['pen_number']; 
       ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/table/fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/table/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/table/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/table/css/style.css">

    <title>View Complaints</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">View Complaints</h2>
      

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  
                
              <th scope="col">Date</th>
              <th scope="col">Department</th>

            </tr>
          </thead>
          <form action="teacher_complaint.php" method="post" target="_blank">

          <tbody>
            <tr>
            <td><input type="date" name="date" class="form-control" id="formGroupExampleInput" value="<?php echo $post['pen_number']; ?>" placeholder="name" required></td></td>
              

              

              <td>
              <select id="course" name="course" style="border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 5px; padding: 8px; font-size: 16px;" required>
              <option value="">Select Department</option>
                <option value="BA English Language and Literature">BA English Language and Literature</option>
                <option value="BA Economics">BA Economics</option>
                <option value="BA History">BA History</option>
                <option value="BBA">BBA</option>
                <option value="BSc Statistics">BSc Statistics</option>
                <option value="BSc Psychology">BSc Psychology</option>
                <option value="BSc Mathematics">BSc Mathematics</option>
                <option value="BSc Computer Science">BSc Computer Science</option>
                <option value="BCom Finance">BCom Finance</option>
                <option value="MCom Marketing">MCom Marketing</option>
                <option value="MA Economics">MA Economics</option>
                <option value="MA History">MA History</option>
                <option value="MA English Language and Literature">MA English Language and Literature</option>
                <option value="MSc Psychology">MSc Psychology</option>
              </select></td>
            </tr>

   
          </tbody>
        </table>
        <button type="submit" name="update" value="update">Submit</button>
</form>
      </div>


    </div>

  </div>

  
    
  <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

 
  </body>
</html>

