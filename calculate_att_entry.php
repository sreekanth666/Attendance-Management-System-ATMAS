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

    <title>Attendance Report</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      
      <h2 class="mb-5">Attendance Report <sup><span style='color:red;font-size:12px;'>ALPHA</span><sup></h2>
      

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  
            <th scope="col">Starting Date</th>
            <th scope="col">Ending Date</th>
              <th scope="col">Batch Year</th>
              <!--
              <th scope="col">Total Working Days</th>
              -->
              <th scope="col">Semester</th>
              <th scope="col">Department</th>

            </tr>
          </thead>
          <form action="calculate_att.php" method="post" target="_blank">

          <tbody>
            <tr>
            <td><input type="date" name="start" class="form-control" id="formGroupExampleInput" value="<?php echo $post['pen_number']; ?>" placeholder="name" required></td></td>
            <td><input type="date" name="end" max="<?php echo date('Y-m-d'); ?>" class="form-control" id="formGroupExampleInput" value="<?php echo $post['pen_number']; ?>" placeholder="name" required></td></td>

              <td><input type="text" name="batch_year" class="form-control" id="formGroupExampleInput" placeholder="Batch Year" required></td></td>
              <!--
              <td><input type="text" name="working_days" class="form-control" id="formGroupExampleInput" placeholder="Total Working Days" required></td></td>

-->

              <td>
              <select id="semester" name="semester" style="border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 5px; padding: 8px; font-size: 16px;" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select></td>

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
  <style>
  @keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 0; }
    100% { opacity: 1; }
  }
</style>
  <center><span style='color:red;font-weight:bold;animation:blink 1s infinite;'>There may be errors in the generated report. Finalize only after checking the information.</span><br></center>

 
    
  <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

 
  </body>
</html>

