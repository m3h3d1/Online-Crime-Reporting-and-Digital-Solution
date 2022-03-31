<?php
 

  session_start();
  if(!isset($_SESSION['nid']))
    header("location:login.php");
  include_once "../php/db.php";
  $unid = $_SESSION['nid'];


  $result=mysqli_query($conn,"SELECT * FROM user where nid='$unid' ");
  $q=mysqli_fetch_assoc($result);
  $uname = $q['name'];

 require_once("C:/xampp/htdocs/Online-Crime-Reporting-and-Digital-Solution/php/dbcontroller.php");
 $db_handle = new DBController();
 $query = "SELECT * FROM district";
 $results = $db_handle->runQuery($query);
 
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
    <link rel="stylesheet" href="../css/complaint.css">
    
    

    <title>Submit your complaint</title>

   
</head>

<script src="Js/jquery-3.6.0.min.js" type="text/javascript"></script>

<script type="text/javascript">
    function getThana(val){
        $.ajax({
            type: "POST",
            url: "getThana.php",
            data: 'district_id='+val,
            success:function(data){
                $("#thana-list").html(data);
            }
        });
    }
</script>
<body>

    <div class="container-fluid">

        <!-- navbar starts -->
        <?php
        include "../php/navbar.php";
        ?>
    <!-- navbar ends -->

        <div class="container">
    
            <form class="row g-3" action="../php/submitComplaint.php" method="post">
            <div class="col-12">
                <label for="nid" class="form-label">NID/Birth certificate no</label>
                <input type="text" class="form-control" id="nid" name="nid" disabled value="<?php echo $unid; ?>">
            </div>
            <div class="col-12">
                <label for="gdtype" class="form-label">Type of GD</label>
                    <select id="gdtype" class="form-select" name="gdtype">
                    <option selected disabled>Choose...</option>
                    <!-- <option label="Choose..."></option> -->
                    <option>Emergency</option>
                    <option>Regular</option>
                    <option>Other</option>
                    </select>
            </div>
            
            <div class="col-12">
                <label for="fname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fname" name="name" disabled value="<?php echo $uname; ?>">
            </div>

            <div class="col-8">
                <label for="loc" class="form-label">Location of crime</label>
                <input type="text" class="form-control" id="loc" name="location">
            </div>

            <div class="col-4">

                <div class="row">
                    <label for="district" class="form-label">Select District</label><br>
                    <select name = "district" id="district-list" class="form-select" onChange="getThana(this.value);">
                      <option selected disabled>Choose...</option>

                      <?php
                      foreach ($results as $district) {
                         ?>
                         <option value="<?php echo $district["district_id"]; ?>"><?php echo $district["district_name"]; ?></option>
                         <?php
                      }
                      ?>
                    </select>
                </div>
                <br>
                <div class="row">
                    <label for="thana" class="form-label">Select Thana</label><br>
                    <select name = "thana" id="thana-list" class="form-select">
                      <option selected disabled>Choose...</option>
                    </select>
                </div>
                    
            </div>

            <div class="col-12">
                <label for="problem" class="form-label">Problem Statement</label>
                <textarea class="form-control" id="problem" rows="3" name="problem"></textarea>
            </div>

            <!-- <div class="col-12">
                <label for="fileup" class="form-label">Upload your image</label>
                <input class="form-control" type="file" id="fileup">
            </div> -->

            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agree">
                <label class="form-check-label" for="agree">
                    The information I provided is true
                </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-secondary" name="submit">
                    Submit
                </button>
            </div>
            </form>
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