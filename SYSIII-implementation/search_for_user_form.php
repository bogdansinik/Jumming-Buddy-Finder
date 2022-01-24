<?php

include "menu.php";
//$to = $_POST['to'];
?>

<html>
    <body>
        <form action="search_for_user.php" method="post">
            <input type="text" name="user_username">
            <!--<input type="hidden" value="<?php echo $to;?>">-->
            <input type="submit" value="search">
        </form>
    </body>
</html>

<?php
$url = $_SERVER['HTTP_REFERER'];
$parts = explode('/', $url);
$page = $parts[5];
//echo $curr;
include_once $page;

?>