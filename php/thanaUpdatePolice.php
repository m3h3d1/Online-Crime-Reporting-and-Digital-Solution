<?php
    include_once "db.php";
    session_start();
  
    if (isset($_POST['submit']))
    {
        // $nid=$_SESSION['nid'];
        $pid=$_POST['policeid'];
        // $name=$_SESSION['name']; 
        $gdid=$_SESSION['gdid'];
        // $thana=$_POST['thana'];
        // $problem=$_POST['problem'];
        // $tid=$_POST['tid'];
        // $status = 'queue';
        // $pid = -1;

        $sql = "UPDATE gd SET pid=$pid WHERE gdid=$gdid";

        $insertion= mysqli_query($conn,$sql);
        if($insertion) {
            echo '<script type="text/javascript">
                alert("Police is set!"); 
                document.location = "../pages/thanaComplaints.php";
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