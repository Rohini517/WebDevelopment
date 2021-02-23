<?php include ("server.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
	<h2>Register</h2>
  </div>
 <form method="post" action="register.php">
	<?php include('errors.php') ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" placeholder="Enter username" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" placeholder="Enter mail id" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" placeholder="Enter password" name="password_1"  value="<?php echo $password; ?>">
	</div>
	<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" placeholder="Enter password"  name="password_2"  value="<?php echo $password; ?>">
	</div>
	<div class="input-group">
		<button type="submit"  name="register" class="btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
 </form>
</body>
</html>
