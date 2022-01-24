<?php
session_start();
include_once "menu.php";
include "db_conn.php";
$id = $_SESSION['id'];
//echo $id;
$data1 = $conn->query("SELECT * FROM `Message` WHERE `to` = '$id' GROUP BY `from` ORDER BY `date` DESC");
$from = $id;
while($res1 = $data1->fetch_assoc()){
    //echo var_dump($res1);
    $text2 = $res1['text'];
    $date = $res1['date'];
    //$text1 = $res1['description'];
    $from1 = $res1['from'];
    $to1 = $res1['from'];
    $mess_id = $res1['id'];
    //echo $to1;
    //echo "  ".$from1;
    //get username
    $username =  $conn->query("SELECT username FROM `User` WHERE `id` = '$from1'")->fetch_assoc()['username'];
    //echo $username;

    echo "<form action='message_to_user_form.php' method='post'>
    <div class='card' style='margin: 10px'>
    <div class='card-body'  style= 'text-align: center;  border-bottom: 2px solid green; padding: 20px; margin: 20px; background-color: lightgreen; border-radius: 50px'>
    <h3>$username</h3>
            <p style='padding :20px 20px 0px 20px' class='card-text'>   <p>$date<p>   </p>
        
        <input type='hidden' name ='to' value='$to1'>
        <input type='hidden' name ='from' value='$from1'>
        <input type='hidden' name ='to_username' value='$username'>
        <input class='btn btn-success' type='submit' value='View Messages'>
        </div>
    </div>
</form>";
}

?>

