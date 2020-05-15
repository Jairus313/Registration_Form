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

  <form method="post" action="register.php" class="login">
  <?php include('errors.php'); ?>
  <div class="font">
  	<h1>REGISTER</h1>
  </div>
  	<div class="input-group">
  	  <input type="text" placeholder="Username" name="username" >
  	</div>
  	<div class="input-group">
  	  <input type="email" placeholder="Email" name="email" >
  	</div>
  	<div class="input-group">
  	  <input type="password" placeholder="Password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <input type="password" placeholder="Confirm password" name="password_2">
  	</div>
  	<div class="btn">
  	  <button type="submit" class="btn" name="reg_user"><h2>Register</h2></button>
  	</div>
  	<div class="text">
  		<h3>Already a member? <a href="login.php">Sign in</a></h3>
  	</div>
  </form>
</center>
</body>
</html>