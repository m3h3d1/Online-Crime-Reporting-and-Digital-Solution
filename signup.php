<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ocrds";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);


  session_start();

    if (isset($_POST['register']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password']; 
      $nid=$_POST['nid'];
      $gender=$_POST['gender'];
      $address=$_POST['address'];
      $mobile=$_POST['mobile'];
      $sqlFind = "SELECT * FROM user where email='$email'";
      $resFind =mysqli_query($conn,$sqlFind);
      if (mysqli_num_rows($resFind)>0)
      {
        echo 'Already Exist';
      }
      else
      {
        $sql="INSERT INTO user(nid,'name',email,'password','address', gender, mobile) VALUES ('$name','$email','$password',$address,$nid,$gender,$mobile)";
        $insertion= mysqli_query($conn,$sql);
        if($insertion)
        {
          $_SESSION['email']=$email;
          echo 'Data inserted';
          header('location:index.php');
        }
        else
        {
          echo 'Not Added';
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
      <link rel="stylesheet" type="text/css" href="signup_style.css" />
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

      <div class="login-page">
        <div class="form">
          <form method="post" action="signup.php">
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
            <select class="form-control" name="gender" placeholder="Gender">
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
              </select> 
            <input type="text" name="address" placeholder="Address" />
              <input type="text"  name="mobile" placeholder="Mobile"  required pattern="[0-9]{11}" minlength="11" maxlength="11" id="mobno"/>
              
            <i class="fas fa-eye" onclick="show()"></i>
            <br>
            <br>
            <button type="submit" name="register"> 
              <!--onclick="window.location.href='login.html'"-->
              Register
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
