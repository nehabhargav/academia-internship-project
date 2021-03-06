<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <?php 
  include('includes/header.php');
  ?>
    

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2></p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">

                    <div class="row">
                        <div class="col-12">
                          <h3>
                            Who Are You?
                          </h3>
                          <form action="" method="POST">
                            <input type="submit" id="button1" value="I'm a Teacher" name="teacher" class="btn btn-primary  px-3" onclick="setColor('button', '#101010')">
                            <input type="submit" id="button2" value="I'm a Student" name="student" class="btn btn-primary  px-3" onclick="setColor('button', '#101010')">
                            </form>
                          </div>
                    </div>
                    <br><br><br>

                  






                    <?php
                        if(isset($_POST['teacher'])){
                          echo '
                          <h3>
                              <u>
                              Teacher Registeration
                              </u>
                          </h3>
                          <br><br>
                          <script>
                              var property = document.getElementById("button1");
                               property.style.backgroundColor = "green"
                           </script>
                          <form method="post" action="processes/registeration.php?user=teacher ">
                        <div class="col-md-12 form-group">
                            <label for="username">First Name</label>
                            <input type="text" name="fname" id="username" class="form-control form-control-lg" size="30">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Last Name</label>
                            <input type="text" name="lname" id="username" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label >Organization/Institute Name</label>
                            <input type="text" name="orgname"   class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Contact Number</label>
                            <input type="number" name="phone"   class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email"   class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" name="password"  id="pword" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword2">Re-type Password</label>
                            <input type="password" name="password" id="pword2" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                    </form>
                    ';
                        }
                        elseif(isset($_POST['student'])){
                          echo '
                          
                          <h3> 
                            <u>
                              Student Registeration
                            </u>
                          </h3>
                          <br><br>
                          <script>
                              var property = document.getElementById("button2");
                              property.style.backgroundColor = "green"
                           </script>
                          
                          <form method="post" action="processes/registeration.php?user=student ">
                        <div class="col-md-12 form-group">
                            <label for="username">First Name</label>
                            <input type="text" name="fname" id="username" class="form-control form-control-lg" size="30">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Last Name</label>
                            <input type="text" name="lname" id="username" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email"   class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password"  id="pword" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword2">Re-type Password</label>
                            <input type="password" name="password" id="pword2" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                    </form>
                           ';
                        }

                    ?>
                      
                </div>
            </div>
            

          
        </div>
    </div>

    

    <?php
      include('includes/footer.php')
    ?>
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>