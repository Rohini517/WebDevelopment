
<?php

  session_start();
   $host="localhost:81";
   $user="root";
   $password="";
   $db="registration";

   $username = "";
   $email = "";
   $uname="";
   $uaddress="";
   $fooddetails="";
   $contact="";
   $errors = array();

   $db = mysqli_connect('localhost','root','','registration') or die("could not connect to database");
   
   if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($db, $_POST['uname']);
    $uaddress = mysqli_real_escape_string($db, $_POST['uaddress']);
    $fooddetails = mysqli_real_escape_string($db, $_POST['fooddetails']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);
    
   if (empty($uname)){array_push($errors, "Name is required");}
   if (empty($uaddress)){array_push($errors, "Address is required");}
   if (empty($fooddetails)){array_push($errors, "Food_details is required");}
   if (empty($contact)){array_push($errors, "contact is required");}
   

   if (count($errors) == 0) {
      $query = "INSERT INTO donor (uname, uaddress, fooddetails, contact) 
             VALUES ('$uname', '$uaddress', '$fooddetails', '$contact')";
    mysqli_query($db, $query);
    $_SESSION["uname"] = $uname;
    $_SESSION["success"] = "thank you for donating";
    header('location:home.html');
    }
   }

   if(isset($_POST['register'])){
   $username = mysqli_real_escape_string($db, $_POST['username']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
   $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

   if (empty($username)){array_push($errors, "Username is required");}
   if (empty($email)){array_push($errors, "Email is required");}
   if (empty($password_1)){array_push($errors, "Password is required");}
   if ($password_1 != $password_2) {array_push($errors, "Password doesnot match");}

   $user_check_query = " SELECT * FROM view WHERE username = '$username' OR email = '$email'";

   $result = mysqli_query($db, $user_check_query);
   $user = mysqli_fetch_assoc($result);
   
   if (count($errors) == 0) {
    $password = md5($password_1);
    $query = "INSERT INTO view (username, email, password) 
          VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION["username"] = $username;
    $_SESSION["success"] = "You are now logged in";
    header('location: user.php');
    }
   if($user){
      if ($user['username'] === $username){array_push($errors, "Username already exists");}
      if ($user['email'] === $email){array_push($errors, "Email already exists");}
    } 
   }
  
   if(isset($_POST['login'])){
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)){array_push($errors, "Username is required");}
    if (empty($password)){array_push($errors, "Password is required");}

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM view WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "logged in successfully";
            header('location: user.php');
        }else{
            array_push($errors, "wrong combination");
        }
    }



} ?>