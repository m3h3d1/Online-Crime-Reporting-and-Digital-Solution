<?php
    session_start();
    include_once "db.php";
    
    
    if (isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $sql="INSERT INTO message(`name`,`email`,`message`) VALUES ('$name','$email','$message')";
        $insertion= mysqli_query($conn,$sql);
        if($insertion) {
            // echo "<script type='text/javascript'>alert('Message Sent!')</script>";
            // header("../pages/contact.php");
            echo '<script type="text/javascript">
                alert("Message Sent!"); 
                document.location = "../pages/contact.php";
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