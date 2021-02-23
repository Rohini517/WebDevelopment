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

        <form action="donor.php" method="post">
        <?php include('errors.php') ?>
            <div class="form-group row" id="footer">
              <label for="uname" class="col-sm-2 col-form-label">Name</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" name="uname" placeholder="Name" style="margin-top: 5px;" value="<?php echo $uname; ?>">
               </div>
            </div>
            <div class="form-group row">
              <label for="uaddress" class="col-sm-2 col-form-label">Address</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" name="uaddress" placeholder="Address" value="<?php echo $uaddress; ?>">
               </div>
            </div>
            <div class="form-group row">
                <label for="fooddetails" class="col-sm-2 col-form-label">Food details</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" name="fooddetails" placeholder="enter quantity of food" value="<?php echo $fooddetails; ?>">
                 </div>
            </div>
            <div class="form-group row">
                <label for="contact" class="col-sm-2 col-form-label">contact</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" name="contact" placeholder="enter contact no" value="<?php echo $contact; ?>">
                 </div>
            </div>
            <div class="form-group row">
               <div class="col-sm-10">
                 <button type="submit" name="submit" class="btn btn-primary" value="submit">submit</button>
               </div>
            </div>
          </form>

        </body>
</html>