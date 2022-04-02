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

<table id="t">
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
      $pid = $_SESSION['pid'];
      $query="select * from gd where pid = '$pid' order by gdid desc limit 10000";
      $result=mysqli_query($conn,$query);  
      while($rows=mysqli_fetch_assoc($result)){
  ?> 

  <tbody style="background-color: white; color: black;">
      <tr>
        <td class="five"><?php echo $rows['gdid']; ?></td>
        <td class="status">
          <?php //echo $rows['status']; ?>
          <?php
            echo'
            <form method="post" action="../php/complaintStatusUpdate.php" >
                <!-- <label for="policeid" class="form-label">Not Assigned</label> -->
                    <select id="status" class="form-select" name="status">';
                        $tid = $_SESSION['tid'];
                        echo $tid;
                        echo '<option value='.$rows["status"].'>'.$rows["status"].'</option>';
                        if($rows["status"] != "Queue") echo '<option value="Queue">Queue</option>';
                        if($rows["status"] != "Processing") echo '<option value="Processing">Processing</option>';
                        if($rows["status"] != "Completed") echo '<option value="Completed">Completed</option>';
                        $_SESSION['gdid'] = $rows['gdid'];
                    echo '</select>
                    <input type="submit" name="submit" value="Update Status" />
                </label>
            </form>';
          ?>
        </td>
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