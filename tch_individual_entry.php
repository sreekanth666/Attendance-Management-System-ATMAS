<?php 
session_start();
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

    <title>View Attendance</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">View Attendance</h2>
      

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  
            <th scope="col">Starting Date</th>
            <th scope="col">Ending Date</th>
              <th scope="col">Register Number</th>


            </tr>
          </thead>
          <form action="tch_indvidual_att_calculate.php" method="post">

          <tbody>
            <tr>
            <td><input type="date" name="start" class="form-control" id="formGroupExampleInput" placeholder="name" required></td></td>
            <td><input type="date" name="end" max="<?php echo date('Y-m-d'); ?>" class="form-control" id="formGroupExampleInput" placeholder="name" required></td></td>

            <td><input type="text" name="reg_number" class="form-control" id="formGroupExampleInput"></td></td>
           


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

