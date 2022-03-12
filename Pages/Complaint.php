<?php
  session_start();
  if(!isset($_SESSION['x']))
    header("location:login.php");
  include_once "../php/db.php";
  $unid = $_SESSION['nid'];


  $result=mysqli_query($conn,"SELECT * FROM user where nid='$unid' ");
  $q=mysqli_fetch_assoc($result);
  $uname = $q['name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/complaint.css">
    
    

    <title>Submit your complaint</title>
</head>
<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark dmenu">
            <div class="container-fluid dmenudiv">
              <a class="navbar-brand" href="https://www.police.gov.bd/">
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
                    <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="userlogin.php">User</a></li>
                      <li><a class="dropdown-item" href="official_login.php">Admin</a></li>
                    </ul>
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
    
            <form class="row g-3" action="../php/submitComplaint.php" method="post">
            <div class="col-12">
                <label for="nid" class="form-label">NID/Birth certificate no</label>
                <input type="text" class="form-control" id="nid" name="nid" disabled value="<?php echo $unid; ?>">
            </div>
            <div class="col-12">
                <label for="gdtype" class="form-label">Type of GD</label>
                    <select id="gdtype" class="form-select" name="gdtype">
                    <option selected>Choose...</option>
                    <option>Emergency</option>
                    <option>Regular</option>
                    <option>Other</option>
                    </select>
            </div>
            
            <div class="col-12">
                <label for="fname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fname" name="name" disabled value="<?php echo $uname; ?>">
            </div>

            <div class="col-8">
                <label for="loc" class="form-label">Location of crime</label>
                <input type="text" class="form-control" id="loc" name="location">
            </div>

            <div class="col-4">
                <label for="thana" class="form-label">Select Thana</label>
                    <select id="thana" class="form-select" name="thana">
                      <option selected>Choose...</option>
                      <option>Dhaka</option>
                      <option>Chittagong</option>
                      <option>Other</option>
                    </select>
            </div>

            <div class="col-12">
                <label for="problem" class="form-label">Problem Statement</label>
                <textarea class="form-control" id="problem" rows="3" name="problem"></textarea>
            </div>

            <!-- <div class="col-12">
                <label for="fileup" class="form-label">Upload your image</label>
                <input class="form-control" type="file" id="fileup">
            </div> -->

            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agree">
                <label class="form-check-label" for="agree">
                    The information I provided is true
                </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-secondary" name="submit">
                    Submit
                </button>
            </div>
            </form>
      </div>

    </div>

    <script src="../Js/bootstrap.min.js"></script>
    <script src="../Js/jquery-3.6.0.min.js"></script>
</body>
</html>