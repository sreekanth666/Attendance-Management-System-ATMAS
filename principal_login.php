<?php 

session_start();

?>




<?php include("header.php") ?>
<html>
	<head>
		<style>
			
			</style>
		
			</head>
<body background-color="yellow">
<div class ="container-fluid jumbo_login">
	<div class="wrapper">
		<form action="principal_login_process.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Principal Login</h3>
			  
			  <input type="text" class="form-control1 form-control" name="user" placeholder="Username" required="" autofocus="" />
			  <br>
			  <input type="password" class="form-control1 form-control" name="pass" placeholder="Password" required=""/>     		  
			  <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">Login</button>  			
		</form>		
	</div>	
</div>
</body>
</html>

<?php include("footer.php") ?>
