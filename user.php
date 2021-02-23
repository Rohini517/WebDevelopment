<?php
  
// Starting the session, to use and 
// store data in session variable 
session_start(); 
   
// If the session variable is empty, this  
// means the user is yet to login 
// User will be sent to 'login.php' page 
// to allow the user to login 
if (!isset($_SESSION['username'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: login.php'); 
} 
   
// Logout button will destroy the session, and 
// will unset the session variables 
// User will be headed to 'login.php' 
// after loggin out 
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: login.php"); 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>user</title> 
    <link rel="stylesheet" href="style.css"> 
 <style>
       body {
	font-size: 120%;
	background: url("images/e.jpg");
	background-size: 1365px 650px;
    }
	a:link,a:visited{
		background-color:rgba(0, 255, 76, 0.651);
		color: rgb(24, 23, 23);
		padding: 5px 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}
 </style>
</head> 
<body> 

    <div> 
   
        <!-- Creating notification when the 
                user logs in -->
          
        <!-- Accessible only to the users that 
                have logged in already -->
        <?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                        echo $_SESSION['success'];  
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 
   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['username'])) : ?> 
            <p> 
                Welcome  
                <strong> 
                    <?php echo $_SESSION['username']; ?> 
                </strong> 
            </p> 
            <h1><b><font color="white" size="8"><center> Choose your Domain</b></h1>
            <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="donor.php" target="_blank">Donor</a></br>
            <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="receiver.html" target="_blank">Receiver</a></br>
            <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="vendor.html" target="_blank">Third Party Vendor</a></br></center>
        <?php endif ?> 
    </div> 
</body> 
</html> 
