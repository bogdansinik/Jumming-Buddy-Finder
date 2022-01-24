<?php

include "db_conn.php";
include_once "menu.php";

$id = $_SESSION['id'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ad_id = trim($_POST['ad_id']);
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $date = $_POST['date'];
    $location = trim($_POST['location']);
    $instrument = trim($_POST['instrument']);
    $skill = $_POST['skill']; 
    $genre = $_POST['genre']; 
    
    $sql = "UPDATE `Ad` SET `title` = '$title', `description` = '$description', `date` = '$date', `location` = '$location', `instrument` = '$instrument',  `skill` = '$skill', `genre` = '$genre' WHERE `Ad`.`id` = $ad_id;";
    mysqli_query($conn, $sql);
    header("Location: my_ads.php");
}
?>