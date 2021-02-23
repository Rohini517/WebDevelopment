<?php include ('server.php') ?>
<!DOCTYPE html>
 <html>
   <head>
      <title>Log in</title>
      <link rel="stylesheet" href="style.css">
   </head>
  <body>
    <div class="header">
       <h2>Log in</h2>
    </div>
   <form action="login.php" method="post"> 
        <?php include('errors.php') ?>
        <div class="input-group">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
  
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        </div>
  
        <div class="input-group" style="background-color:#f1f1f1">
           <table>
            <tr>
              <td><button type="submit" name="login" class ="loginbutton">Login</button> </a></td>
              <td><a href="index.php"> <button type="button" class="signUpbtn">sign up</button> </a></td>
            </tr>
          </table>
       </div>
       <p>
		      Forgot <a href="#">password?</a>
        </p>
   </form>
 </body>
</html>