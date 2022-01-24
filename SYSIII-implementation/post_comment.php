<?php
session_start();
include "db_conn.php";    
$_SESSION['data'] = $_POST['id'];
$user_id = $_SESSION['id'];
$id = ($_SESSION['data']);
$comment_text = $_POST['comment_text'];
//echo "User_id: ".$user_id;
//echo "AD id: ".$id;

    $data = $conn->query(
        "SELECT * FROM `Ad` WHERE `id` = '$id'"
    );
    $res = $data->fetch_assoc();
    $title1 = $res['title'];
    $text1 = $res['description'];
    $ad_id = $res['id'];
    
    //add comment
    if(!empty($_POST['comment_text']) && trim($_POST['comment_text']!= '')){
    //$id1 = $_POST['id1'];
    $sql = "INSERT INTO `Comment` (`id`, `date`, `user_id`, `text`, `ad_id`) VALUES (NULL, current_timestamp(), '$user_id', '$comment_text', '$id')";
    mysqli_query($conn, $sql);
    //header("Location: one_ad.php");    
    }

    include "one_ad.php";
?>
