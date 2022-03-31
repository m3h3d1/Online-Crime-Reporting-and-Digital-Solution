<?php
// $con = mysqli_connect("localhost", "root", "") or die("Error");
// mysqli_select_db("$con", "ocrds") or die("Error in selecting database");

class DBController{

    
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "ocrds";

    private $conn;
    
    
    function __construct()
    {
        $this->conn = $this->connectDB(); 
    }

    function connectDB(){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        mysqli_set_charset($conn, "utf8");
        return $conn;
    }

    function runQuery($query){
        $result = mysqli_query($this->conn,$query);
        while ($row=mysqli_fetch_assoc($result)){
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }
    function numRows($query) {
        $result = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

}    
?>