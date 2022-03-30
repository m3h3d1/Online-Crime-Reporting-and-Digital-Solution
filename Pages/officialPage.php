<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    

    <title>Online GD</title>
</head>
<body>

    <div class="container-fluid">

    <!-- navbar starts -->
    <?php
        include "../php/navbar.php";
    ?>
    <!-- navbar ends -->


    <div class="container">
        <hr> <br><br> <br><br> <br><br> <br><br> <br><br>
        <div class="row text-center">

            <div class="col-md-4 col-sm-12 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Police Login</h3>
                        <p>
                            <a href="policelogin.php" class="btn btn-primary">Police Login</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Incharge Login</h3>
                        <p>
                            <a href="inchargelogin.php" class="btn btn-primary">Incharge Login</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>HQ Login</h3>
                        <p>
                            <a href="headlogin.php" class="btn btn-primary">HQ Login</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <!-- Footer -->
    <?php
    include "../php/footer.php";
    ?>
    <!-- Footer ends here -->


    <script src="https://use.fontawesome.com/ef783540f8.js"></script>
    <script src="../Js/bootstrap.min.js"></script>
    <script src="../Js/jquery-3.6.0.min.js"></script>
</body>
</html>