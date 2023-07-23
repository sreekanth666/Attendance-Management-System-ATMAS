

<?php include("header.php") ?>
<?php
session_start();

if (isset($_SESSION['error'])) {
  echo '<script>alert("' . $_SESSION['error'] . '");</script>';
  unset($_SESSION['error']); // remove the error message from the session
}
?>
<html>
	<head>
		<style>
			
			</style>
		
			</head>
<body background-color="yellow">
<div class ="container-fluid jumbo_login">
	<div class="wrapper">
		<form action="student_login_process.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Student Login</h3>
			  
			  <input type="email" class="form-control1 form-control inputlogintext" name="email" placeholder="Email" required="" autofocus="" />
			  <br>
			  <input type="password" class="form-control1 form-control inputloginpass" name="password" placeholder="Password" required=""/>     		  
			  <input class="btn btn-lg btn-primary btn-block"  name="submit" value="Login" type="submit"></button>  			
		</form>		
	</div>	
</div>
</body>
</html>

<?php include("footer.php") ?>