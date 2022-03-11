<?php
    session_start();
    if(session_destroy()) {
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['name']; ?></h2>
    <a href = "logout_session.php">Logout</a>
</body>
</html>