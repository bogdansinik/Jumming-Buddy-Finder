<?php
if(isset($_SESSION['loggedin']) ==false){
    header('Location: login_view.php');
}