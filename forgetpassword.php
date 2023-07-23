

<?php include("header.php"); ?>
<html>
	<head>
		<style>
			
			</style>
<div class="container-fluid";>

          <h1 class="h1_index text-center">Password Recovery</h1>
</div>	
<div class ="container-fluid jumbo_login">
	<div class="wrapper">
		<form action="step1_processs.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Step 1</h3>
			  <label>Username:</label>
			  <input type="text" class="form-control1 form-control inputlogintext" name="username" placeholder="Username" required="" autofocus="" />
			  <br>
			  <label>Email:</label>
			  <input type="text" class="form-control1 form-control inputloginpass" name="email" placeholder="Email" required=""/>  <br>   		  
			  <button class="btn btn-lg btn-primary btn-block"  name="step1" value="Reset" type="Submit">Reset Password</button>  			
		</form>		
	</div>	
</div>



<?php include("footer.php") ?>

