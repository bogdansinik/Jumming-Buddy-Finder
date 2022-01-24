<?php

session_start();

include "db_conn.php";
include_once "menu.php";

?>
<html>
    <body style=' background-image: url("wallpaper1.jpg"); background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover'>
        <h1 style = "margin: 20px; color: white; font-size: 50px; text-shadow: 2px 2px gray">My Posts</h1>
    </body>
</html>
<?php
 

$id = $_SESSION['id'];



    $data = $conn->query("SELECT * FROM `Ad` WHERE `owner_id` = '$id'");
    while($res = $data->fetch_assoc()){
        $title1 = $res['title'];
        $text1 = $res['description'];
        $ad_id = $res['id'];
        $location = $res['location'];
        $genre = $res['genre'];
        $skill = $res['skill'];
        $instrument = $res['instrument'];
        $date = $res['date'];

        echo "
        
        <div class='panel panel-success' style='opacity: 0.8'>
            <div class='panel-heading'>$title1</div>
            <div class='panel-body'>
                <p id='text'>$text1</p>
            <div style='display: inline-block;'>
                <form  action='delete_ad.php' method='post'>
                    <input type='hidden' name='id' value='".$ad_id."'>
                    <input style='display: inline-block;' class='btn btn-danger' type='submit' value='Delete'>
                </form>
            </div>
            <div style='display: inline-block;'>
                <form action='one_ad.php' method='post'>
                    <input type='hidden' name='id' value='".$ad_id."'>
                    <input style='display: inline-block;' type='submit' class='btn btn-success' value='View'>
                </form>
            </div>
            <div style='display: inline-block;'>
                <form action='edit_ad.php' method='post'>
                    <input type='hidden' name='ad_id' value='".$ad_id."'>
                    <input type='hidden' name='title' value='".$title1."'>
                    <input type='hidden' name='description' value='".$text1."'>
                    <input type='hidden' name='location' value='".$location."'>
                    <input type='hidden' name='skill' value='".$skill."'>
                    <input type='hidden' name='genre' value='".$genre."'>
                    <input type='hidden' name='date' value='".$date."'>
                    <input type='hidden' name='instrument' value='".$instrument."'>
                    <input style='display: inline-block;' type='submit' class='btn btn-primary' value='Edit'>
                    
                </form>
                </div>
            </div>
            </div>
        </div>";
    }

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    .panel-success{
        width: 300px;
        height: 300px;
        word-wrap: break-word;
        float: left;
        margin: 10px;
        overflow: auto;
       
    }
   
</style>