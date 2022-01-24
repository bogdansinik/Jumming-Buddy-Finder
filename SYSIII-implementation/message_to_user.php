<?php
session_start();
include "db_conn.php";
include_once "menu.php";

$to = $_POST['to'];
$from = $_POST['from'];
$text = trim($_POST['text']);
//echo " to ".$to;
//echo " from ".$from;
if($text != ""){
$sql = "INSERT INTO `Message` (`id`, `from`, `to`, `date`, `text`) VALUES (NULL, '$from', '$to', current_timestamp(), '$text');";
mysqli_query($conn, $sql);
}

include "message_to_user_form.php";
?>
