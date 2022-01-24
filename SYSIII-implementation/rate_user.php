<?php

include "db_conn.php";
$to = $_POST['to'];
$from = $_POST['from'];
$stars = $_POST['stars'];
echo "TO: " .$to;
echo "FRom: " .$from;

$sql1 = "SELECT * FROM `Rating` WHERE `from` = '$from' AND `to`=$to;";
//echo "num of rwos: ".mysqli_num_rows($result);
$sql = "INSERT INTO `Rating` (`id`, `date`, `stars`, `from`, `to`) VALUES (NULL, current_timestamp(), '$stars', '$from', '$to')";

    $sql2 = "DELETE FROM `Rating` WHERE `from`= '$from' AND `to`='$to';";
    mysqli_query($conn,$sql2);
    mysqli_query($conn,$sql);



header("Location: ads.php");

?>

