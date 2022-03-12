<?php 
  session_start();
  $message="";
  if(count($_POST)>0) {
    include_once '../php/db.php';

    $email=$_POST["email"];
    $password=$_POST["password"];

    $sqli ="SELECT * from user where email='$email' AND Password='$password' ";
    $res=mysqli_query($conn,$sqli);
    $row = mysqli_fetch_array($res);
    if(mysqli_num_rows($res)>0){
      $_SESSION['name']=$row['name'];    
      $_SESSION['email'] = $row['email'];
      $_SESSION['nid'] = $row['nid'];
      echo $_SESSION['name'];
      header('location:../index.php');
    }
    else {
      $message = "Invalid Username or Password!";
    }
    // echo $_SESSION['name'];
  }
  // if(isset($_SESSION["email"])) {
  //   header("Location:index.php");
  // }
?>



<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">


  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/contact.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>


<div class="container-fluid">
      <!-- navbar starts -->
    <?php
        include "../php/navbar.php";
    ?>
    <!-- navbar ends -->  
</div>



<div class="col-md-12 c-head">
            <h1>Contact Us</h1>
            <h2>Message</h2>
            <div class="gmap">
                <p style="text-align: center;"><i class="fa fa-map-marker"></i>Find us on Map</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.663652073585!2d90.4047336149041!3d23.723702384602504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8fbcc7d8b0b%3A0xd38c69e99ca87f67!2sBangladesh%20Police%20Headquarters%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1646932035278!5m2!1sen!2sbd" width="1000" height="450" style="border:10px solid aliceblue;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-12 cont-add">
            <div class="col-md-4 cont-data">
                <h3>Head Office Address</h3>
                <p>Bangladesh Police Police Headquarters 6,Phoenix</br> Road,
                     Fulbaria Dhaka - 1000</p>
            </div>
            <div class="col-md-8 cont-data">
                <h3>Operation Control Room</h3>
                <ul>
                    <li><i class="fa fa-mobile"></i>Mobile :</li>
                    <li>01320001299</li>
                    <li>01320001300</li>
                </ul>
                <ul>
                    <li><i class="fa fa-envelope"></i>Mail :</li>
                    <li>oic_opscr@police.gov.bd</li>
                </ul>
                <ul>
                    <li><i class="fa fa-phone-square"></i>Phone :</li>
                    <li>+880-2-223381967</li>
                    <li>+880-2-223383515</li>
                </ul>
                <ul>
                    <li><i class="fa fa-fax"></i>Fax :</li>
                    <li>+880-2-9563362</li>
                    <li>+880-2-9563358</li>
                    <li>+880-2-7126305</li>
                    <li>+880-2-9562330</li>
                    <li>+880-2-55102505</li>
                </ul>
            </div>
            </div>
        <div class="col-md-12 cont-form">
            <h3>Quick Contact</h3>
            <form action="action_page.php">
                <div class="mb-3 mt-3">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                  </div>
                <div class="mb-3 mt-3">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="message">Messages:</label>
                    <textarea class="form-control" rows="5" id="message" name="text"></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>


    <!-- Footer -->
    <?php
    include "../php/footer.php";
    ?>
    <!-- Footer ends here -->



<script src="../Js/bootstrap.min.js"></script>
<script src="../Js/jquery-3.6.0.min.js"></script>
<!-- navigation ends -->

	

   
</body>
</html>