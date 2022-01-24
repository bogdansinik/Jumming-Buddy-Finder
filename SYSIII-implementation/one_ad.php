<?php
session_start();
include_once "menu.php";
include "db_conn.php";
//include "delete_comment.php"
$user_id = $_SESSION['id'];
$id = $_POST['id'];
echo"<form action='one_ad.php' method='post'>
<input type='hidden' value='$id' name='id'>
</form>";
    $data = $conn->query(
        "SELECT * FROM `Ad` WHERE `id` = '$id'"
    );
    $res = $data->fetch_assoc();
    $title1 = $res['title'];
    $text1 = $res['description'];
    $ad_id = $res['id'];
    $owner_id = $res['owner_id'];
    $ad_owner =  $conn->query("SELECT username FROM `User` WHERE `id` = '$owner_id'")->fetch_assoc()['username'];
    $instrument = $res['instrument'];
    $skill = $res['skill'];
    $location = $res['location'];
    $date = $res['date'];
    $date_of_posting = $res['date_of_posting'];
    $genre = $res['genre'];

   
    
    echo "<html>
    <body>
        <div style='margin: 20px'>
            <h1>$title1</h1>
                <h4><i>Ad by $ad_owner</i></h4>
                <p>$date_of_posting</p>
                <br>
                <div>
                    <p>$text1</p>
                    <p>Needed instrument: $instrument</p>
                    <p>Needed skill: $skill </p>
                    <p>Needed genre: $genre </p>
                    <p style='text-transform: capitalize'>Location: $location </p>
                    <p> Date: $date </p>
                    <form action='message_to_user_form.php' method='post'>
                    <input type='hidden' value='$ad_owner' name='to_username'>
                    <input type='hidden' value='$owner_id' name='to'>
                    <button class='btn btn-success'>Contact</button>
                    </form>
                    
                </div>
                <br>
                <div>
                <form action='post_comment.php' method='post'>
                    <input type='hidden' name='id' value='".$id."'>
                    <input type='text' name='comment_text'>
                    <input class='btn btn-primary' type='submit' value='Post Comment'>
                </form>
            </div>
        </div>
    </body>

</html>";

$data1 = $conn->query("SELECT * FROM `Comment` WHERE `ad_id` = '$id'");
echo "<h3> Comments: </h3>";
while($res1 = $data1->fetch_assoc()){
    $text2 = $res1['text'];
    $date = $res1['date'];
    //$text1 = $res1['description'];
    $comment_id = $res1['id'];
    $owner_id = $res1['user_id'];

    //get username
    $username =  $conn->query("SELECT username FROM `User` WHERE `id` = '$owner_id'")->fetch_assoc()['username'];
    //echo $username;

    if($user_id == $owner_id){
    echo "
    <div class='card' style= 'border: 2px solid green; border-radius: 20px; padding: 10px; max-width: 400px; margin:3px;'>
        <div class='card-body'>
            
                <p class='card-text'><b>$username: $text2</b>   <p>$date<p>   </p>
            
            <form action='delete_comment.php' method='post'>
                <input type='hidden' name='comment_id' value='".$comment_id."'>
                <input type='hidden' name='id' value='".$id."'>
                <input class='btn btn-danger' type='submit' value='Delete' style='' >
            </form>
        </div>
    </div>";
    }else{
        echo "
        <div class='card' style= 'border: 2px solid green; border-radius: 20px; padding: 10px; max-width: 400px; margin:3px;'>
            <div class='card-body'>
                
                    <p class='card-text'><b>$username: $text2</b>   <p>$date<p>   </p>
                
             
            </div>
        </div>";
    }
}



    
?>

