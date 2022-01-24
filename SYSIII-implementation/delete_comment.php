<?php
session_start();
include "db_conn.php";


    
    $comment_id = $_POST['comment_id']; 
    
    $sql = "DELETE FROM Comment WHERE id =  '$comment_id'";
    
    if ($conn->query($sql)) {
        //echo '<script>alert("Comment deleted!")</script>';
       
    }
    include "one_ad.php";
    
?>
