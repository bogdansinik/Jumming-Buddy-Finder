<?php
session_start();
include_once "menu.php";
include "db_conn.php";
$id = $_SESSION['id'];
$select= "select * from User where id='$id'";
$data = mysqli_query($conn,$select);
$res = mysqli_fetch_assoc($data);

$name = $res['name'];
$surname = $res['surname'];
$username = $res['username'];
$email = $res['email'];
$password = $res['password'];
//echo var_dump($data);

?>
<!-- <form action="profile_update.php" method="post">
   <input type="text" name="fname" placeholder ="First Name"required><br>
 
   <input type="text" name="lname" placeholder ="Last Name" required><br>
 
   <input type="email" name="email" placeholder ="Email" required><br>
   
   <input type="password" name="password" placeholder ="Password" required><br>

  <input type="text" name="username" placeholder =" Username"required><br>
   <input type="submit" name="edit">
   
</form> -->




<form action="profile_update.php" method="post" style="width:20%; margin: 50px 0px 0px 50px" >
<div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="fname" aria-describedby="emailHelp" placeholder="First name" value="<?php echo $name;?>">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lname" aria-describedby="emailHelp" placeholder="Last name" value="<?php echo $surname;?>">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Username" value="<?php echo $username;?>">
    
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $email;?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $password;?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
