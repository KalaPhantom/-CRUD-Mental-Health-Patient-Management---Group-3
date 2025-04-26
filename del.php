<?php

    include "process.php";
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM tbl_patient where patient_id =$id";
        $mysqli ->query($sql);
    }
    header("location:/websites/index.php");
    exit;




?>

