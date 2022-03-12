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
  <title>Faq</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">


  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/main.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>

<!-- navigation starts -->
<div class="container-fluid">
<?php
        include "../php/navbar.php";
    ?>
</div>


<div class="col-md-12 c-head">
            <h1>FAQ</h1>
            <h2>Know More</h2>
  <div class="faq">
    <div class="card">
      <div class="card-body">
    
      <h5>১। অনলাইনে অভিযোগ জানাতে কি কি প্রয়োজন?</h5> 
      <p>উত্তরঃ আপনার জাতীয় পরিচয়পত্র নম্বর অথবা জন্মসনদপত্র নম্বর অথবা পাসপোর্ট নম্বর, আপনার সচল মোবাইল, আপনার লাইভ ছবি।</p> 

      <h5>২। অনলাইনে অভিযোগ কপি কি আমি পেতে পারব?</h5> 
      <p>উত্তরঃ হ্যাঁ, আপনি অভিযোগ জানানোর পরে অভিযোগ পত্র ডাউনলোড করতে পারবেন।</p> 

      <h5>৩। অনলাইনে অভিযোগ জানাতে প্রথমে কি করনীয়?</h5> 
      <p>উত্তরঃ প্রথমে আপনাকে একাউন্টে লগইন করতে হবে। একাউন্ট না থাকলে আগে রেজিস্ট্রেশন করে নিতে হবে।</p> 

      <h5>৪। অভিযোগ জানানোর পরবর্তী পদক্ষেপ কি?</h5> 
      <p>উত্তরঃ সংশ্লিষ্ট থানা থেকে আপনার সাথে যোগাযোগ করা হবে।</p> 

      <h5>৫। অনলাইনে অভিযোগ জানাতে কারা রেজিস্ট্রেশন করতে পারবে?</h5> 
      <p>উত্তরঃ বাংলাদেশের যেকোনো নাগরিক অনলাইনে অভিযোগ জানাতে পারবেন।</p> 

      </div>
    </div> 
    </div>   
</div>
<div class="clr"></div>
            

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