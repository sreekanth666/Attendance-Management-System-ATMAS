

<?php include("header.php") ?>
<html>
	<head>
		<style>
			
			</style>
		
			</head>
<body >
<div class ="container-fluid jumbo_login">
	<div class="wrapper">
		<form action="teacher_login_process.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Teacher Login</h3>
			  
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