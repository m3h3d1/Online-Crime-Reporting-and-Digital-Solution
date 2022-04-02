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
        $status = 'Queue';
        $pid = -1;
        // photo

        $sql="INSERT INTO gd(`nid`,`type`,`name`,`location of crime`,`thana name`, `problem statement`, `status`, `pid`) VALUES ('$nid','$gdtype','$name','$location','$thana','$problem', '$status', '$pid')";
        $insertion= mysqli_query($conn,$sql);
        if($insertion) {
            echo '<script type="text/javascript">
                alert("Report is submitted!"); 
                document.location = "../pages/complaint.php";
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