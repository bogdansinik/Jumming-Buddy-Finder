
<?php
session_start();
include "db_conn.php";


    $to = $_POST['to'];
    $from = $_POST['from'];
    $mess_id = $_POST['mess_id']; 
    $to_username = $_POST['to_username'];
    //echo " to ".$to;
    //echo " from ".$from;
    $sql = "DELETE FROM Message WHERE id =  '$mess_id'";
    
    if ($conn->query($sql)) {
        //echo '<script>alert("Comment deleted!")</script>';
       
    }
    include "message_to_user_form.php";
    
?>

<form action="delete_message.php" method="post" id="form_id">
    <input type="hidden" name ="to" value="<?php echo $to?>">
    <input type="hidden" name ="from" value="<?php echo $from?>">
    <input type='hidden' name='to_username' value="<?php echo $to_username?>">
</form>
