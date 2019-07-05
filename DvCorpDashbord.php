<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>STEM Lab</title>
        <link rel="stylesheet" href="./Css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./Css/dashboard.css"/>
        <link rel="shortcut icon" href="DVC.png" type="image/x-icon"/>
    </head>
    <body>
        <div class="background">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="DVC.png" height="60px" width="104px">STEM Lab</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="DvCorpDashbord.php">Home</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="DvCorpAboutUs.php">About Us</a>                                
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>                                
                            </li>
                        </ul>

                        <ul class="navbar-nav nav navbar-right">
                    <?php
                    if(isset($_SESSION['userid'])){
                        echo '<li >
                        <a class="active nav-link" href="DvCorpLogin.php">Logout
                            <i class="fa fa-user"></i>
                        </a>
                    </li>';
                    }else{
                        echo '<li class="mr-2">
                        <a class="nav-link" href="DvCorpSignUp.php">SignUp
                            <i class="fa fa-user-plus"></i>
                        </a>                                
                    </li>
                    <li >
                        <a class="active nav-link" href="DvCorpLogin.php">Login
                            <i class="fa fa-user"></i>
                        </a>
                    </li>';
                    }
                            
                            
                        ?>

                        </ul>
                    </div>
                
                </div>
                   
            </nav>
            <br><br><br><br><br>
              <div class="container jumbotron">
                 <div class="row padding">
                    <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="./img/face.jpg">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h1>Name: Frank Oxen</h1>
                        <p>Tech Enthusiast </p>
                        <p>Speciality: Software Engineer </p>


                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                        <br>
                        <h3>ABOUT PROJECT</h3>
                        <P>Detailed breakdown of the project will be given here.
                        <br><br><br><br><br><br><br><br><br>
                        <a href="./photoGallery/PhotoGallery.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">View Gallery<i class="fa fa-picture-o"></i></a>
                        </div>


                    </div>

                </div>
            </div>

            
            

            <!-- else{
                header("location: ../DvCorpDashbord.php?error=wrongpassword");
                 exit();
            }
            */?> -->



           
            <br><br>          

            <footer>
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="DvCorpAboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php" onclick="press()">Subscribe</a>
                    </li>
                  </ul>

        <div class="row">
            <div class="col-md-4">
            <form>
    <h4><a name="contact"></a>Contact us</h4><br>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputEmail4">Firstname</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Firstname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Lastname</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Lastname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="example@gmail.com">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone Nunber</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Message</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Type Message">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
            <div class="col-md-4">
            <div class="contact">
            <h3><a name="contact"></a>Address</h3><br><br>
                  <p>STEM Lab <p>Faith Lab Estate, Kaduna, Nigeria. <p>stemlab@gmail.com  <p>Visit us at <a href="https://web.facebook.com/ezeaba.chukwuemeka">Facebook</a><p>Phone: 08162950654</p><p><span style="text-align: end">&copy;2019. All Rights Reserved</span></p>
                  <div class="social">
                    <a href="facebook.com"><img src="facebook-logo-png-9.png" width="40px" height="40px"></a>
                    <a href="twitter.com"><img src="twitter_PNG32 (1).png" width="40px" height="40px"></a>
                    <a href="youtube.com"><img src="youtube_PNG15.png" width="40px" height="40px"></a>
                    <a href="linkedin.com"><img src="linkedIn_PNG38.png" width="40px" height="40px"></a>
    </div>
                </div>
            <div class="col-md-4">

            </div>

        </div>
                  
                  <br>
                  
                </div>
                
    

                  <br>
            </footer>
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="./javaScript/bootstrap.min.js"></script>
            <script src="./javaScript/landing.js"></script>
    </body>



</html>