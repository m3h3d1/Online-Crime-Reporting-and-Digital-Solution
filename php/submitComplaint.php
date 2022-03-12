<?php
    include_once "db.php";
    session_start();
  
    if (isset($_POST['submit']))
    {
        $nid=$_POST['nid'];
        $gdtype=$_POST['gdtype'];
        $name=$_POST['name']; 
        $location=$_POST['location'];
        $thana=$_POST['thana'];
        $problem=$_POST['problem'];
        // photo

        $sql="INSERT INTO user(`nid`,`type`,`name`,`location of crime`,`thana name`, `problem statement`) VALUES ('$nid','$gdtype','$name','$location','$thana','$problem')";
        $insertion= mysqli_query($conn,$sql);
        if($insertion) {
            echo 'Data inserted';
            header('location:../index.php');
        }
        else {
            echo "Error: " . $sql . "
            " . mysqli_error($conn);
        }    
    }
    else
    {
      echo '';
    }
?>