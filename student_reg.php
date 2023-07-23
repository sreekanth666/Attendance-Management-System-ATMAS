<?php 

session_start();

?>


<?php include("header.php") ?>

<html>

<body id="LoginForm">
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Student Registration</h2>
  
   </div>
    <form id="Register" action="student_reg_process.php" method="post">
    <div class="form-group">
         <input type="text" class="form-control" name="regno" id="regno" placeholder="Register Number ">
        </div>
        <div class="form-group">
         <input type="text" class="form-control" name="name" id="name" placeholder="Name ">
        </div>
        <div class="form-group">
         <input type="text" class="form-control" name="course" id="course" placeholder="Course ">
        </div>
        <div class="form-group">
         <input type="text" class="form-control" name="year" id="year" placeholder="Year ">
        </div>
        <div class="form-group">
         <input type="text" class="form-control" name="sem" id="sem" placeholder="Semester ">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
        </div>

        <div class="form-group">
         <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number">
        </div>
       
        <div class="forgot">
        <br>
</div>
        <button type="submit" class="btn btn-primary">Register</button>

    </form>

</div></div></div>


</body>
</html>
<br><br><br><br><br>
<?php include("footer.php") ?>
<style>
    body#LoginForm{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}

</style>