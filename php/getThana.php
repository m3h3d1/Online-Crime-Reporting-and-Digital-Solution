<?php
    require_once ("dbcontroller.php");
    $db_handle = new DBController();

    if (! empty($_POST["district_id"])) {
        $query = "SELECT * FROM thana WHERE district_id = ' " . $_POST["district_id"] . " ' order by name asc";
        $results = $db_handle->runQuery($query);
        ?>

        <option value disabled selected> Choose... </option>

        <?php
            foreach ($results as $thana) {
        ?>
        <option value="<?php echo $thana["tid"]; ?>"><?php echo $thana["thana_name"]; ?></option>
        <?php        
            }
            
    }

?>