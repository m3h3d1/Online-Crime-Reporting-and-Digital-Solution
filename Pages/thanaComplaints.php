<?php 
  session_start();
  if(!isset($_SESSION['iid'])) {
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
    background-image: url(../Images/map1.jpg);
    
    background-size: cover;
    width: 100vw;
    height: auto;
  
    text-align: center;
}
.table1 {
            box-shadow: 0px 0px 20px #000;
            -webkit-box-shadow: 0px 0px 20px #000;
            -moz-box-shadow: 0px 0px 20px #000;
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

<?php
      $iid = $_SESSION['iid'];
      $query="SELECT gd.gdid, gd.status, gd.nid, gd.type, gd.name as uname, gd.`location of crime`, gd.`thana name` as gdthana, gd.`problem statement`, gd.pid FROM `incharge` join `thana` on incharge.tid = thana.tid 
      join `gd` on thana.thana_name = gd.`thana name` 
    --   join `police` on police.pid=gd.pid
      where incharge.id = '$iid' order by gdid desc limit 10000";
      $result=mysqli_query($conn,$query);  
      $rows=mysqli_fetch_assoc($result);
?> 

<div>
  <br>

<h2> User Complaints in <b><?php echo  $rows['gdthana']?></b> Thana </h2>

<table id="t" class="table1">
  <thead>
    <tr>
      <th scope="col">GD ID</th>
      <th scope="col">Status</th>
      <th scope="col">Assigned Police </th>
      <th scope="col">NID</th>
      <th scope="col">Type</th>
      <th scope="col">Name</th>
      <th scope="col">Location of Crime</th>
      <th scope="col">Thana</th>
      <th scope="col">Problem Statement</th>
      
    </tr>
  </thead>
  <?php
      while($rows){
  ?> 

  <tbody style="background-color: white; color: black;">
      <tr>
        <td class="five"><?php echo $rows['gdid']; ?></td>
        <td class="status"><?php echo $rows['status']; ?></td>
        <td class="twenty"><?php 
            if($rows['pid']!='-1') { // police assign kore na dewa thakle
              $pid = $rows['pid'];
              $tid = $_SESSION['tid'];
              $query2="select * from police where tid='$tid' and pid='$pid'"; // query kore police er id, name ber kora hobe tid & pid use kore
              $result2=mysqli_query($conn,$query2);  
              $rows2=mysqli_fetch_assoc($result2);
              echo $rows2['pid'].' - '.$rows2['name'];
            }
            else {
                // echo "Not Assigned <br>";
                echo'
                <form method="post" action="../php/thanaUpdatePolice.php" >
                    <label for="policeid" class="form-label" style="color:Red";>Not Assigned</label>
                        <select id="policeid" class="form-select" name="policeid">';
                            $tid = $_SESSION['tid'];
                            // echo $tid;
                            // echo "111";   
                            $query2="select * from police where tid='$tid'";
                            $result2=mysqli_query($conn,$query2);  
                            while($rows2=mysqli_fetch_assoc($result2)){
                                echo '<option value='.$rows2[pid].'>'.$rows2[pid].' - '.$rows2[name].'</option>';
                            }
                            $_SESSION['gdid']=$rows['gdid'];
                        echo '</select>
                        <input type="submit" name="submit" value="Set Police" />
                    </label>
                </form>';
            }
        ?> <br> 
            
        </td>   
        <td class="five"><?php echo $rows['nid']; ?></td>     
        <td class="ten"><?php echo $rows['type']; ?></td>          
        <td class="ten"><?php echo $rows['uname']; ?></td>          
        <td class="twenty"><?php echo $rows['location of crime']; ?></td>          
        <td class="ten"><?php echo $rows['gdthana']; ?></td>          
        <td class="cproblem"><?php echo $rows['problem statement']; ?></td>         
         
      </tr>
    </tbody>

  <?php
    $rows=mysqli_fetch_assoc($result);
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