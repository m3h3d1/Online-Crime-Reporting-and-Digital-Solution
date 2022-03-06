<?php
    include "db.php";


    session_start();

    if (isset($_POST['register']))
    
    {
        $nid = $_POST['nid'];
        $username=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password']; 
        $sqlFind = "SELECT * FROM user where email='$email' ";
        $resFind =mysqli_query($conn,$sqlFind);
        if (mysqli_num_rows($resFind)>0)
        {
        echo 'Already Exist';
        }
        else
        {
        $sql="INSERT INTO user(Name,Email,Password) VALUES ('$nid', '$username','$email','$password')";
        $insertion= mysqli_query($conn,$sql);
        if($insertion)
        {
            $_SESSION['email']=$email;
            header('location:profile.php');
        }
        else
        {
            echo 'Not Added';
        }
        }
    }
    else
    {
    echo '';
    }
?>
