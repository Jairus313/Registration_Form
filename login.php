<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="styles.css">
  <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
</head>
<body>
<center> 
  <form method="post" action="login.php" class="login">
	  <?php include('errors.php'); ?>
	  
  	<div class="input-group">
	    <h1>LOGIN</h1>
  		<input type="text" name="username" placeholder="Username">
  	</div>
  	<div class="input-group">
  		<input type="password" name="password" placeholder="Password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"><h2>Login</h2></button>
  	</div>
  	<div class="text">
  		<h3>Not a member? <a href="register.php">Sign Up</a></h3>
  	</div>
  </form>
</center>
</body>
</html>