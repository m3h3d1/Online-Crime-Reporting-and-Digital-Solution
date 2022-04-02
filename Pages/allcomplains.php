-<?php 
  session_start();
  if(!isset($_SESSION['nid'])) {
    header('home.php');
  }
  include "../php/db.php";
  // $aid = $_SESSION['aid'];
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

  <link rel="stylesheet" type="text/css" href="../css/login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Document</title>

    <link href="../css/historytable.css" rel="stylesheet">
    <style>
      body {
    background-image: url(../Images/lg.jpg);
    background-size: cover;
    width: 100vw;
    height: auto;
  
    text-align: center;
}
.table1 {
            box-shadow: 0px 0px 20px #000;
            -webkit-box-shadow: 0px 0px 20px #000;
            -moz-box-shadow: 0px 0px 20px #000;
            border-radius:10px;
        }
      </style>
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
<h2> User Complaints</h2>

<table id="t" class="table1">
  <thead>
    <tr>
      <th scope="col">GD ID</th>
      <th scope="col">Status</th>
      <th scope="col">NID</th>
      <th scope="col">Type</th>
      <th scope="col">Name</th>
      <th scope="col">Location of Crime</th>
      <th scope="col">Thana</th>
      <th scope="col">Problem Statement</th>
    </tr>
  </thead>
  <?php
      $query="select * from gd order by gdid desc limit 10000";
      $result=mysqli_query($conn,$query);  
      while($rows=mysqli_fetch_assoc($result)){
  ?> 

  <tbody style="background-color: #dcdde1; color: black;">
      <tr>
        <td class="five"><?php echo $rows['gdid']; ?></td>
        <td class="status"><?php echo $rows['status']; ?></td>
        <td class="five"><?php echo $rows['nid']; ?></td>     
        <td class="ten"><?php echo $rows['type']; ?></td>          
        <td class="ten"><?php echo $rows['name']; ?></td>          
        <td class="twenty"><?php echo $rows['location of crime']; ?></td>          
        <td class="ten"><?php echo $rows['thana name']; ?></td>          
        <td class="cproblem"><?php echo $rows['problem statement']; ?></td>          
      </tr>
    </tbody>

  <?php
    } 
  ?>
</table>
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