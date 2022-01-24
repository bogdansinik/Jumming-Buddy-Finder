<?php
 
 session_start();
 include "db_conn.php";

 
    $id=$_SESSION['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $username =$_POST['username'];
    $password=$_POST['password'];


    $select= "select * from User where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update User set name='$fname',surname='$lname',email='$email',username='$username',password='$password' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           echo '<script>alert("Profile edited!")</script>';
           header('location:ads.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:profile_edit_form.php');
    }
 
?>