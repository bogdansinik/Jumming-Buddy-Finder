<?php
session_start();
include "db_conn.php";
include_once "menu.php";
?>
<html>
    <body style=' background-image: url("wallpaper1.jpg"); background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover'>
        <h1 style = "margin: 20px; color: white; font-size: 50px; text-shadow: 2px 2px gray">Posts</h1>
    </body>
    <div style="display: inline-block; margin: 20px;">
    <a href="post_ad.php">
        <button class="btn btn-primary" style = "margin: 10px display: inline-block">Post ad</button>
    </a>
    <form action="filter_ads.php" method="post" name="filter" style="display: inline-block; margin: 20px">
        <label for="filter" style="color: white;">Filter ads: </label>
        <input type="text" name="location" placeholder="Location">
        <select class="formStyle" name="instrument">
        <option value="">Needed instrument:</option>
        <option value="guitar">Guitar</option>
        <option value="piano">Piano</option>
        <option value="drums">Drums</option>
        <option value="ukulele">Ukulele</option>
        <option value="voice">I Sing :)</option>
        </select>
        <select class="formStyle" name="skill">
      <option value="">Nedeed skill:</option>  
      <option value="beginner">Beginner</option>
      <option value="medium">Medium</option>
      <option value="advanced">Advanced</option>
      <option value="pro">Professional</option>
    </select>

    <select class="formStyle" name="genre">
        <option value="">Needed genre:</option>
        <option value="rock">Rock</option>
        <option value="pop">Pop</option>
        <option value="folk">Folk</option>
        <option value="rap">Rap</option>
        <option value="country">Country)</option>
        </select>
        <input type="submit" value="Filter">
    </form>
</div>
<div></div>
</html>
<?php

$id = $_SESSION['id'];
//echo $data['username'];
    //$username = $_POST['username'];
    $location = $_POST['location'];
    $instrument = $_POST['instrument'];
    $skill = $_POST['skill'];
    $genre = $_POST['genre'];
   
    //Do real escaping here

    $query = "SELECT * FROM `Ad` ";
    $conditions = array();

   
    if($location != "") {
        //$query = $query. "AND ".$location;
        $conditions[] = "`location`='$location'";
    }
    if($instrument != "") {
        //$query = $query. "AND ".$instrument;
        $conditions[] = "`instrument`='$instrument'";
    }
    if($skill != "") {
       // $query = $query. "AND ".$skill;
        $conditions[] = "`skill`='$skill'";
    }
    if($genre != "") {
        //$query = $query. "AND ".$genre;
        $conditions[] = "`genre`='$genre'";
    }
    $sql = $query;
    if (count($conditions) > 0) {
      $sql .="WHERE ". implode(' AND ', $conditions);
    }



    //$data = $conn->query($sql);
    //$data = $res -> fetch_assoc();
    $data = $conn->query($sql);
    //echo $sql;
    
    while($res = $data->fetch_assoc()){
        
        $title1 = $res['title'];
        $text1 = $res['description'];
        $ad_id =$res['id'];
        $owner_id = $res['owner_id'];
        $username =  $conn->query("SELECT username FROM `User` WHERE `id` = '$owner_id'")->fetch_assoc()['username'];
        if($owner_id == $id){
            echo "
            <div class='panel panel-success'>
            <div class='panel-heading'>
            <form action='user_profile.php' method='post'>       
            <div>$title1 <i>by <input style = 'margin: 10px' type='submit'  value='$username'></div>
            </div>
                    <div class='panel-body'>
                        <p id='text'>$text1</p>
                        
                        <input type='hidden' name='id' value='".$ad_id."'>
                        <input type='hidden' name='owner_id' value='".$owner_id."'>
                        
                    </form>
                    </div>
                    <form action='one_ad.php' method='post'>
                        <input type='hidden' name='id' value='".$ad_id."'>
                        <input type='hidden' name='owner_id' value='".$owner_id."'>
                        <input style = 'margin: 10px' type='submit' class='btn btn-success' value='View Post'>
                    </form>
                    <form action='delete_ad.php' method='post'>
                    <input type='hidden' name='id' value='".$ad_id."'>
                    <input style = 'margin: 10px' class='btn btn-danger' type='submit' value='Delete'>
                    </form>
                </div>";
        }
        else{
            echo "
        <div class='panel panel-info'>
        <div class='panel-heading'>
        <form action='user_profile.php' method='post'>       
        <div>$title1 <i>by <input style = 'margin: 10px' type='submit'  value='$username'></div>
        </div>
                <div class='panel-body'>
                    <p id='text'>$text1</p>
                    
                    <input type='hidden' name='id' value='".$ad_id."'>
                    <input type='hidden' name='owner_id' value='".$owner_id."'>
                    
                </form>
                </div>
                <form action='one_ad.php' method='post'>
                    <input type='hidden' name='id' value='".$ad_id."'>
                    <input type='hidden' name='owner_id' value='".$owner_id."'>
                    <input style = 'margin: 10px' type='submit' class='btn btn-success' value='View Post'>
                </form>
            </div>";
        }
    }    

//echo var_dump($_POST);
//echo var_dump($conditions);
?>

<style>
     .panel-success{
        width: 300px;
        height: 300px;
        word-wrap: break-word;
        float: left;
        margin: 10px;
        overflow: auto;
       
    }
    .panel-info{
        width: 300px;
        height: 300px;
        word-wrap: break-word;
        float: left;
        margin: 10px;
        overflow: auto;
    }
</style>