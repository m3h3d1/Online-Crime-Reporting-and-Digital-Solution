<?php 
  session_start();
  $message="";
  if(count($_POST)>0) {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ocrds";
    $conn = mysqli_connect("$hostname","$username","$password","$dbname")  or die('Unable To connect');

    $email=$_POST["email"];
    $password=$_POST["password"];

    $sqli ="SELECT * from user where email='$email' AND Password='$password' ";
    $res=mysqli_query($conn,$sqli);
    $row = mysqli_fetch_array($res);
    if(mysqli_num_rows($res)>0){
      $_SESSION['name']=$row['name'];    
      $_SESSION['email'] = $row['email'];
      echo $_SESSION['name'];
      header('location:index.php');
    }
    else {
      $message = "Invalid Username or Password!";
    }
    echo $_SESSION['name'];
  }
  // if(isset($_SESSION["email"])) {
  //   header("Location:index.php");
  // }
?>



<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">
	
<div class="login-page">
  <div class="form">

    <form method="post" action="login.php" >
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-ntent: center;" loop  autoplay></lottie-player>
      <input type="text" name="email" placeholder="&#xf007;  Email"/>
      <input type="password" name="password"  placeholder="&#xf023;  Password"/> 
      <!-- id="password" -->
      <i class="fas fa-eye" onclick="show()"></i> 
      <br>
      <br>
      <button type="submit" name="login">LOGIN</button>
      <p class="message"></p>
    </form>
    <?php
        if(isset($_Get['error'])==true)
        {
            echo '<font color="red"><p align="center">Oh sorry, Email and Password does not match</p></font>';
        }
    ?>

    <form class="login-form">
      <button type="button" onclick="window.location.href='signup.php'">SIGN UP</button>
    </form>
  </div>
</div>

  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>

  <div class="message"><?php if($message!="") { echo $message; } ?></div>
</body>
</html>