<?php
session_start();
include "db_conn.php";
include_once "menu.php";

$reciever = $_POST['to_username'];
$to = $_POST['to'];
$from = $_SESSION['id'];
$username1 =  $conn->query("SELECT username FROM `User` WHERE `id` = '$to'")->fetch_assoc()['username'];



?>
<body style=' background-image: url("chat_bg.jpeg"); background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover '>
<h1 style="color: lightgreen;text-shadow: 2px 2px darkgray;">Messages with <?php echo $reciever;?>:</h1>


<?php

//display messages
$data1 = $conn->query("SELECT * FROM `Message` WHERE (`from` = '$from' AND `to` = '$to') OR (`from` = '$to' AND `to` = '$from') ");
while($res1 = $data1->fetch_assoc()){
    $text2 = $res1['text'];
    $date = $res1['date'];
    //$text1 = $res1['description'];
    $from1 = $res1['from'];
    $to1 = $res1['to'];
    $mess_id = $res1['id'];

    //get username
    $username =  $conn->query("SELECT username FROM `User` WHERE `id` = '$from1'")->fetch_assoc()['username'];
    //echo $username;

    if($from1 == $from){
    echo "
    <div class='card' style='width: fit-content; height: fit-content; display: table; margin: 10px'>
        <div class='card-body'  style= 'text-align: center; display: table; border-bottom: 2px solid green; margin:0px 1000px 0px 200px; width:20%; background-color: lightgreen; border-radius: 50px'>
            
                <p style='padding :20px 20px 0px 20px' class='card-text'><b>$text2</b>   <p>$date<p>   </p>
            
            <form action='delete_message.php' method='post'>
                <input type='hidden' name='mess_id' value='".$mess_id."'>
                <input type='hidden' name='to' value='".$to."'>
                <input type='hidden' name='from' value='".$from."'>
                <input type='hidden' name='to_username' value='".$username1."'>
                <input class='btn btn-danger' type='submit' value='Delete' style='' >
            </form>
        </div>
    </div>";
    }else{
        echo "
        <div class='card' style='width: fit-content; height: fit-content; display: table; margin: 10px'>
        <div class='card-body'  style= 'text-align: center; display: table; border-bottom: 2px solid green; margin:0px 200px 0px 1000px; width:20%; background-color: lightgreen; border-radius: 50px'>
            
                <p style='padding :20px 20px 0px 20px' class='card-text'><b>$text2</b>   <p>$date<p>   </p>
            
            
        </div>
    </div>";
    
    }
}


?>

</body>
<footer style="background: none; color: black;">
<form style="background: none; color: black;"action="message_to_user.php" method="post">
    <input style="border-radius: 20px; padding:5px; font-size: 20px; color: black; width:80%; margin: 20px 20px 0px 20px" type="text" name="text" autofocus="autofocus">
    <input type="hidden" name ="to" value="<?php echo $to?>">
    <input type="hidden" name ="from" value="<?php echo $from?>">
    <input type='hidden' name='to_username' value="<?php echo $username1?>">
    <input type="submit" class="btn btn-success"value="Send">
</form>
</footer>