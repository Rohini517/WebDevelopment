<?php include ("server.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
	<h2>submit</h2>
  </div>
 <form method="post" action="donor2.php">
	<?php include('errors.php') ?>
	<div class="input-group">
		<label>uname</label>
		<input type="text" placeholder="Enter username" name="uname" value="<?php echo $uname; ?>">
	</div>
	<div class="input-group">
		<label>uaddress</label>
		<input type="text" placeholder="Enter mail id" name="uaddress" value="<?php echo $uaddress; ?>">
	</div>
	<div class="input-group">
		<label>fooddetails</label>
		<input type="text" placeholder="Enter password" name="fooddetails"  value="<?php echo $fooddetails; ?>">
	</div>
	<div class="input-group">
		<label>contact</label>
		<input type="text" placeholder="Enter password"  name="contact"  value="<?php echo $contact; ?>">
	</div>
	<div class="input-group">
		<button type="submit"  name="submit" class="btn">submit</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
 </form>
</body>
</html>
