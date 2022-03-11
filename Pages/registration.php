<?php
  session_start();

  include_once '../php/db.php';

    if (isset($_POST['register']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password']; 
      $nid=$_POST['nid'];
      $gender=$_POST['gender'];
      $address=$_POST['address'];
      $mobile=$_POST['mobile'];

      $sqlFind = "SELECT * FROM user where email='$email' OR nid='$nid'"; // 
      $resFind =mysqli_query($conn,$sqlFind);
      if (mysqli_num_rows($resFind)>0)
      {
        echo 'Already Exist';
      }
      else
      {
        $sql="INSERT INTO user(`nid`,`name`,`email`,`password`,`address`, `gender`, `mobile`) VALUES ('$nid','$name','$email','$password','$address','$gender','$mobile')";
        $insertion= mysqli_query($conn,$sql);
        if($insertion) {
          $_SESSION['name'] = $name;
          echo 'Data inserted';
          header('location:../index.php');
        }
        else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
         }    
      }
    }
  else
  {
    echo '';
  }
?>


<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Registration</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />


      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">





      <link rel="stylesheet" type="text/css" href="../registration_style.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600"
        rel="stylesheet"
        type="text/css"
      />
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body class="body">

<!-- navigation starts -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark dmenu">
            <div class="container-fluid dmenudiv">
              <!-- <a class="navbar-brand" href="https://www.police.gov.bd/"> -->
                <img src="../images/logo2.png">
              </a>
              <button class="navbar-toggler dtoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
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
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
                  <li class="nav-item dropdown">
                    <?php
                      if($_SESSION["name"]) {
                      ?>
                      <?php echo '<p style="color: white;"> Welcome '.$_SESSION["name"].'</p>'; ?>. <a href="logout_session.php" tite="Logout">Logout.
                      <?php
                      }else {
                        // echo "<p style=\"color:white;\">Please login first .</p>";
                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="login.php">User</a></li>
                          <li><a class="dropdown-item" href="official_login.php">Admin</a></li>
                        </ul>';
                      }

                    ?>
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a> -->
                    <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="login.php">User</a></li>
                      <li><a class="dropdown-item" href="official_login.php">Admin</a></li>
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
</div>
<script src="../Js/bootstrap.min.js"></script>
<script src="../Js/jquery-3.6.0.min.js"></script>
<!-- navigation ends -->


      <div class="login-page">
        <div class="form">
          <form method="post" action="registration.php">
            <lottie-player
              src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"
              background="transparent"
              speed="1"
              loop
              autoplay
            ></lottie-player>
            <input type="text" name="name" placeholder="Name" />
            <input type="text" name="email" placeholder="Email Address" />

            <input type="password" name="password" id="password" placeholder="set a password" />
            <input type="text" name="nid" placeholder="NID Number" />
            <p style="color:white;">Gender</p>
            <select class="form-control" name="gender">
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
              </select> 
            <input type="text" name="address" placeholder="Address" />
              <input type="text"  name="mobile" placeholder="Mobile"  required pattern="[0-9]{11}" minlength="7" maxlength="11" id="mobno"/>
              
            <i class="fas fa-eye" onclick="show()"></i>
            <br>
            <br>
            <button type="submit" name="register"> 
              Register
            </button>
            <button type="submit" name="login" onclick="window.location.href='login.php'"> 
              Login
            </button>
          </form>

          <!-- <form class="login-form">
            
          </form> -->
        </div>
      </div>
    </body>
    <script>
      function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    </script>
  </html>
</html>
