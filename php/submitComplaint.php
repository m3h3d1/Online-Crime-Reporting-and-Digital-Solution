<?php
    include_once "db.php";
    session_start();
  
    if (isset($_POST['submit']))
    {
        $nid=$_SESSION['nid'];
        $gdtype=$_POST['gdtype'];
        $name=$_SESSION['name']; 
        $location=$_POST['location'];
        $thana=$_POST['thana'];
        $problem=$_POST['problem'];
        // photo

        $sql="INSERT INTO gd(`nid`,`type`,`name`,`location of crime`,`thana name`, `problem statement`) VALUES ('$nid','$gdtype','$name','$location','$thana','$problem')";
        $insertion= mysqli_query($conn,$sql);
        if($insertion) {
            echo '<script type="text/javascript">
                alert("Message Sent!"); 
                document.location = "../pages/complaint.php";
            </script>';
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