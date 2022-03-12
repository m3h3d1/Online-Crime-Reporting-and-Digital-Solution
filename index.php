<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    

    <title>Online GD</title>
</head>
<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark dmenu">
            <div class="container-fluid dmenudiv">
              <!-- <a class="navbar-brand" href="https://www.police.gov.bd/"> -->
                <img src="images/logo2.png">
              </a>
              <button class="navbar-toggler dtoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Area     
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Dhaka</a></li>
                      <li><a class="dropdown-item" href="#">Chittagong</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Other</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Pages/about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Pages/faq.php">FAQ</a>
                  </li>
                  <li class="nav-item dropdown">
                    <?php
                      if($_SESSION["name"]) {
                        echo '<p style="color: white;"> Welcome '.$_SESSION["name"].'</p>'; 

                        echo '<li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="php/logout_session.php">Logout</a>
                        </li>';

                        echo '<li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Contact</a>
                        </li>';
                        }else {
                        // echo "<p style=\"color:white;\">Please login first .</p>";
                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="pages/login.php">User</a></li>
                          <li><a class="dropdown-item" href="pages/official_login.php">Admin</a></li>
                        </ul>';
                      }

                    ?>
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a> -->
                    <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="pages/login.php">User</a></li>
                      <li><a class="dropdown-item" href="pages/official_login.php">Admin</a></li>
                    </ul> -->
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="content">
                  <h1>Have a Complaint?</h1>
                  <h3>Register Below &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
                  <hr>
                    <a href="registration.php" aria-pressed="true">
                    <button type="button" class="btn btn-secondary">Sign up!</button>
                      </a>
                </div>
              </div>
            </div>
          </div>


    </div>




    <!-- Footer -->
    
    <div class="foot bg-dark">
          <div class="row" style="margin-top:200px; padding: 100px 50px; padding-bottom: 20px;">
            

            <div class="col-lg-4">
            <h2> Online Crime Reporting</h2>
                <p style="padding-right:85px; padding-top: 20px;">
                  Online Crime reporting is a useful and handy way to submit any valid complaint to nearest police stations. Suspendisse cursus oncus odio pulvinar.  sollicitudin odio at cursus pulvinar. Nullam eros libero, hendrerit et velit sit amet, laoreet lobortis felis. Vestibulum tellus velit, interdum ac molestie quis, tristique sit amet tortor.    
                </p>
            </div>
            <div class="col-lg-4">
            <h2> Quick links</h2>
              <ul>
                      <li><a href="about.php">About us</a></li>
                      <li><a href="faq.php">FAQ</a></li>
                      <li><a href="https://www.police.gov.bd/">Bangladesh Police</a></li>
                      <li><a href="http://www.mha.gov.bd/">Ministry of home affairs</a></li>
                      <li><a href="https://bangladesh.gov.bd/index.php">Bangladesh national Portal</a></li>
                      <li><a href="https://www.eprocure.gov.bd/">E Government procurment</a></li>
                    </ul>
            </div>

            <div class="col-lg-4" style="text-align: right;">
            <h2 style="padding-bottom: 20px;">Contact us</h2>
              <p>
                Bangladesh Police Police Headquarters 6, Phoenix Road, Fulbaria Dhaka - 1000<br><br><br>
                Phone: +8801717771177,<br>
                +8801717771227,<br>
                +8801717771007,<br>
                
                Email: check123@gmail.com
              </p>
            </div>

            
            

    </div>
    <div class="tray container-fluid" slyle="color:white;">
      <ul>
        <li>
          <a href="mailto:tatineesarkersunom@gmail.com"><i class="fa fa-envelope-open"></i></a>
        </li>
        <li>
          <a href="https://www.facebook.com/BangladeshPoliceOfficialPage"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a href="https://www.youtube.com/channel/UCiEciIZfqbetHCJe6oCi6FQ"><i class="fa fa-youtube"></i></a>
        </li>
        <li>
          <a href="https://twitter.com/bd_police"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
          <a href="tel:+8801794064545"><i class="fa fa-phone"></i></a>
        </li>
        
      </ul>
    </div>

</div>



    <!-- Footer ends here -->
    <script src="https://use.fontawesome.com/ef783540f8.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    <script src="Js/jquery-3.6.0.min.js"></script>
</body>
</html>