-<?php 
  session_start();
  if(!isset($_SESSION['nid'])) {
    header('home.php');
  }
  include "../php/db.php";
  // $aid = $_SESSION['aid'];
  if(isset($_POST['submit'])){

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['mobile']) && !empty($_POST['thana'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $thana = $_POST['thana'];

        $query = "insert into police(name, email, password, gender, mobile, tid) values('$name', '$email', '$password', '$gender', '$mobile', '$thana')";

        $run = mysqli_query($conn, $query) or die(mysqli_error());

        if($run){
            echo "Police is successfully added!";
        }
        else{
            echo "Form is not submitted!";
        }

    }
    else{
        echo "all fields are required";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../css/registration_style.css"/>

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Document</title>

    <link href="../css/historytable.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
         <!-- navbar starts -->
    <?php
        include "../php/navbar.php";
    ?>
    <!-- navbar ends --> 
</div>


<div>
  <br>
  <div class="login-page">
      <h3 style="text-align:center; color: white;">Police Registration</h3> <br>
        <div class="form">
          <form method="post" action="add police.php">
            
            <input type="text" name="name" placeholder="Name" />
            <input type="text" name="email" placeholder="Email Address" />

            <input type="password" name="password" id="password" placeholder="set a password" />
            
            <select class="form-control" name="gender">
                <option selected disabled>Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
              </select> <br> 
              <input type="text"  name="mobile" placeholder="Mobile Number"  required pattern="[0-9]{11}" minlength="7" maxlength="11" id="mobno"/>
              <input type="text" name="thana" placeholder="Thana ID"/> 
              
              
            <i class="fas fa-eye" onclick="show()"></i>
            <br>
            <br>
            <button type="submit" name="submit"> 
              Submit
            </button>
           
          </form>


  </div>
</div>



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