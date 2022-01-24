<?php
session_start();
include "db_conn.php";



    $ad_id = $_POST['id']; 
    
    $sql = "DELETE FROM Ad WHERE id = $ad_id";
    
    if ($conn->query($sql)) {
        
        header("Location: my_ads.php");
    }

?>