-<?php 
  session_start();
  if(!isset($_SESSION['nid'])) {
    header('home.php');
  }
  include "../php/db.php";
  $unid = $_SESSION['nid'];
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
</head>

<body>
<div class="container-fluid">
         <!-- navbar starts -->
    <?php
        include "../php/navbar.php";
    ?>
    <!-- navbar ends --> 
</div>


<!-- 
<div style="padding:50px;">
      <table class="table table-bordered">
       <thead class="thead-dark" style="background-color: black; color: white;">
         <tr>
          <th scope="col">Complaint Id</th>
          <th scope="col">Type of Crime</th>
          <th scope="col">Location of Crime</th>
          <th scope="col">Problem Statement</th>
        </tr>
      </thead>

<?php
      $query="select * from gd where nid='$unid' order by gdid desc";
      $result=mysqli_query($conn,$query);  
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['gdid']; ?></td>
        <td><?php echo $rows['type']; ?></td>     
        <td><?php echo $rows['location of crime']; ?></td>          
        <td><?php echo $rows['problem statement']; ?></td>          
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  
</table>
 </div> 
-->



<div>
  <br>
<h2> User Complain History</h2>

<table id="t">
  <thead>
    <tr>
      <!-- <th>Example text</th>
      <th>Example text</th>
      <th>Here is a longer kajsdhkaj aksjkdha kajsd kajksd  piece of text</th>
      <th>Example text</th> -->
      <th scope="col">Complaint ID</th>
      <th scope="col">Type of Crime</th>
      <th scope="col">Location of Crime</th>
      <th scope="col">Problem Statement</th>
    </tr>
  </thead>
  <?php
      $query="select * from gd where nid='$unid' order by gdid desc";
      $result=mysqli_query($conn,$query);  
      while($rows=mysqli_fetch_assoc($result)){
  ?> 

  <tbody style="background-color: white; color: black;">
      <tr>
        <td class="cgdid"><?php echo $rows['gdid']; ?></td>
        <td class="ctype"><?php echo $rows['type']; ?></td>     
        <td class="cloc"><?php echo $rows['location of crime']; ?></td>          
        <td class="cproblem"><?php echo $rows['problem statement']; ?></td>          
      </tr>
    </tbody>

  <?php
    } 
  ?>
</table>
</div>
<!-- <div style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">
</div>  -->


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