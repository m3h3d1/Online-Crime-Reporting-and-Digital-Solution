<?php
    include_once "db.php";
    session_start();
  
    if (isset($_POST['submit']))
    {
        $status=$_POST['status'];
        $gdid=$_SESSION['gdid'];
        
        $sql = "UPDATE gd SET `status`='$status' WHERE gdid='$gdid'";
        //echo $status;

        $insertion= mysqli_query($conn,$sql);
        if($insertion) {
            echo '<script type="text/javascript">
                alert("Status Updated!"); 
                document.location = "../pages/policeComplaints.php";
            </script>';
        }
        else {
            echo "Error: " . $sql . "
            " . mysqli_error($conn);
        }    
    }
    else {
      echo '';
    }
?>