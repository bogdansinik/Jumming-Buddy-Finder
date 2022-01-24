<?php
session_start();
include "db_conn.php";
include_once "menu.php";
$username = $_POST['user_username'];
//echo $username;
$sql = "SELECT * FROM User WHERE username = '$username'";
$data = $conn->query($sql)->fetch_assoc();
$username = $data['username'];
$name = $data['name'];
$surname = $data['surname'];
$email = $data['email'];
$id = $data['id'];

$to = $id;
$from = $_SESSION['id'];
$username1 =  $conn->query("SELECT username FROM `User` WHERE `id` = '$to'")->fetch_assoc()['username'];


$sql1 ="SELECT AVG(`stars`) AS avg FROM `Rating` WHERE `to`= $id;";
$result = mysqli_query($conn,$sql1);
$average_stars = mysqli_fetch_assoc($result)['avg'];
//echo $name;
if($data != NULL){
echo"
<div class='page-content page-container' id='page-content'>
    <div class='padding'>
        <div class='row container d-flex justify-content-center'>
            <div class='col-xl-6 col-md-12'>
                <div class='card user-card-full'>
                    <div class='row m-l-0 m-r-0'>
                        <div class='col-sm-4 bg-c-lite-green user-profile'>
                            <div class='card-block text-center text-white'>
                                <div class='m-b-25'> <img src='https://img.icons8.com/bubbles/100/000000/user.png' class='img-radius' alt='User-Profile-Image'> </div>
                                <h6 class='f-w-600'>$name $surname</h6>
                                <p>@$username</p> <i class=' mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16'></i>
                            </div>
                        </div>
                        <div class='col-sm-8'>
                            <div class='card-block'>
                                <h6 class='m-b-20 p-b-5 b-b-default f-w-600'>Information</h6>
                                <div class='row'>
                                    <div class='col-sm-6'>
                                        <p class='m-b-10 f-w-600'>Email</p>
                                        <h6 class='text-muted f-w-400'>$email</h6>
                                    </div>
                                    <div class='col-sm-6'>
                                        <p class='m-b-10 f-w-600'>Id</p>
                                        <h6 class='text-muted f-w-400'>$id</h6>
                                    </div>
                                    <div class='col-sm-6'>
                                        <p class='m-b-10 f-w-600'>Rating</p>
                                        <h6 class='text-muted f-w-400'>$average_stars</h6>
                                    </div>
                                </div>
                               
                                        
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div>
                    <form action='rate_user_form.php' method='post'>
                    <input type='submit' style='float:right' class='btn btn-primary' value='Rate user'>
                    <input type='hidden' name ='to' value='$to'>
                    <input type='hidden' name ='from' value='$from'>
                    <input type='hidden' name='id' value='".$id."'>
                    </form>
                
                
                <form action='message_to_user_form.php' method='post'>
                <input type='hidden' name='id' value='".$id."'>
                <input type='hidden' name ='to' value='$to'>
                <input type='hidden' name ='from' value='$from'>
                <input type='hidden' name ='to_username' value='$username1'>
                <input type='submit' style='' class='btn btn-primary' value='Contact user'>
                </form>
                </div>
            
            
        </div>
    </div>
</div>
";
}else header("Location: ads.php");
?>

<style>
    body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263)
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}
</style>

