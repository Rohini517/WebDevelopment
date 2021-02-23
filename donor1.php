<?php include ("server.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Food for all</title>
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
      
        <!-- CSS Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
      
        <!-- Font Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      
        <!-- Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </head>
   <body>
        <section class="colored-section" id="title">
      
          <div class="container-fluid">
      
            <!-- Nav Bar -->
      
            <nav class="navbar navbar-expand-lg navbar-dark">
      
              <a class="navbar-brand" href="">Food for all</a>
      
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                  <span class="navbar-toggler-icon"></span>
              </button>
      
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#footer">Post-Request</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#Sign-up">Food details</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        My Profile
                      </a>
                      <div class="dropdown-menu dropdown-menu-md-right " aria-labelledby="bd-versions">
                        <a class="dropdown-item " href="#">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                      </div>
                  </li>
                </ul>
      
              </div>
            </nav>
            <div class="row">

                <div class="col-lg-6">
                  <h1 class="big-heading">If you can't feed a hundred people,then feed just one</h1>
                  
                </div>
        
                
        
                <div class="col-lg-6">
                  <iframe src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS-iP8TrjouWmQAwxovnfrJlrrZGa0cVpRsSThW-csBOAdhIv69&usqp=CAU" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                  </div>
        
              </div>

        </div>
        </section>
        <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">uname</label> <span
                    id="uname-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="uname"
                    id="uname" />
            </div>
            <div class="input-row">
                <label>uaddress</label> <span id="uaddress-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="uaddress" id="uaddress" />
            </div>
            <div class="input-row">
                <label>fooddetails</label> <span id="fooddetails-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="fooddetails" id="fooddetails" />
            </div>
            <div class="input-row">
                <label>contact</label> <span id="contact-info"
                    class="info"></span><br />
                <textarea name="contact" id="contact"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="submit" class="btn-submit"
                    value="submit" />
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var uname = $("#uname").val();
            var uaddress = $("#uaddress").val();
            var fooddetails = $("#fooddetails").val();
            var content = $("#contact").val();
            
            if (uname == "") {
                $("#uname-info").html("Required.");
                $("#uname").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (uaddress == "") {
                $("#uaddress-info").html("Required.");
                $("#uaddress").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (fooddetails == "") {
                $("#fooddetails-info").html("Required.");
                $("#fooddetails").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (contact == "") {
                $("#contact-info").html("Required.");
                $("#contact").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
   </body>
</html>