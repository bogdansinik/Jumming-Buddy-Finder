<?php

session_start();
include_once "menu.php";
include "db_conn.php";

$id = $_SESSION['id'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ad_id = trim($_POST['ad_id']);
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $date = $_POST['date'];
    $location = trim($_POST['location']);
    $instrument = trim($_POST['instrument']);
    $skill = $_POST['skill']; 
    $genre = $_POST['genre']; 
    

    $date_for_setting =  str_replace(" ","T",$date);
   
     }

?>

<body>
    

<h1>
  Post your Ad here :)
</h1>
<div>
  <form action="submit_changes.php" method="post">
    <input type="text" name="title" class="formStyle" placeholder="Title" value = "<?php echo $title;?>" required />
    <input type="text" name="description" class="formStyle" placeholder="Description" value = "<?php echo $description;?>"  required />
    <input type="datetime-local" name="date" class="formStyle" placeholder="Date" value = "<?php echo $date_for_setting;?>" required />
    <input type="text" name="location" class="formStyle" placeholder="Location" value = "<?php echo $location;?>"  required />
        
        <select  class="formStyle" id="1" name="instrument" selected = "<?php echo $instrument;?>" >
        <option <?php if($instrument=="") echo 'selected="selected"'; ?> value="">Needed instrument:</option>
        <option <?php if($instrument=="guitar") echo 'selected="selected"'; ?> value="guitar">Guitar</option>
        <option <?php if($instrument=="piano") echo 'selected="selected"'; ?> value="piano">Piano</option>
        <option <?php if($instrument=="drums") echo 'selected="selected"'; ?>value="drums">Drums</option>
        <option <?php if($instrument=="ukulele") echo 'selected="selected"'; ?> value="ukulele">Ukulele</option>
        <option <?php if($instrument=="voice") echo 'selected="selected"'; ?> value="voice">Singer</option>
        </select>
    
    
    <select class="formStyle" name="skill">
      <option <?php if($skill=="") echo 'selected="selected"'; ?> value=''>Needed skill:</option>  
      <option <?php if($skill=="beginner") echo 'selected="selected"'; ?>  value="beginner">Beginner</option>
      <option <?php if($skill=="medium") echo 'selected="selected"'; ?>  value="medium">Medium</option>
      <option <?php if($skill=="advanced") echo 'selected="selected"'; ?> value="advanced">Advanced</option>
      <option <?php if($skill=="pro") echo 'selected="selected"'; ?>  value="pro">Professional</option>
    </select>

    <select class="formStyle" name="genre" >
        <option  <?php if($genre=="") echo 'selected="selected"'; ?>  value="">Needed genre:</option>
        <option <?php if($genre=="rock") echo 'selected="selected"'; ?> value="rock">Rock</option>
        <option <?php if($genre=="pop") echo 'selected="selected"'; ?> value="pop">Pop</option>
        <option <?php if($genre=="folk") echo 'selected="selected"'; ?> value="folk">Folk</option>
        <option <?php if($genre=="rap") echo 'selected="selected"'; ?> value="rap">Rap</option>
        <option <?php if($genre=="country") echo 'selected="selected"'; ?> value="country">Country</option>
        </select>
     <input type="hidden" name="ad_id" value= "<?php echo $ad_id;?>" >
    <input class="formButton" style = "border: 0"type="submit" value= "Submit" >
  </form> 
</div>
    </body>
<style>

label {
  label {
  display: inline-block;
  width: 140px;
  text-align: left;
}​
}
    body {
  background-color: #2ecc71;
  font-family: source-sans-pro, sans-serif;
}

h1 {
  margin-left: auto;
  margin-top: 50px;
  text-align: center;
  font-weight: 100;
  font-size: 2.8em;
  color: #ffffff;
}

div {
  width: 500px;
  margin: auto;
}

.formStyle { 
  background-color: #2ecc71;
  padding: 20px; 
  width: 400px; 
  margin-bottom: 20px; 
  border-bottom-width: 1px; 
  border-bottom-style: solid; 
  border-bottom-color: #ecf0f1; 
  border-top-style: none; 
  border-right-style: none; 
  border-left-style: none; 
  font-size: 1em;
  font-weight: 100;
  color: #ffffff;
}

.formButton {
  float: right;
	background-color:#ffffff;
	display:inline-block;
	color:#2ecc71;
	font-size:28px;
	font-weight: 500;
	padding:6px 24px;
  margin-top: 15px;
  margin-right: 60px;
	text-decoration:none;
}

.formButton:hover {
	background-color: #27ae60;
  color:#ffffff;
}

.formButton:active {
	position:relative;
	top:3px;
}

/*To remove the outline that appears on clicking the input textbox*/
input:focus {
  outline: none;
}

/* To format the placeholder text color */
::-webkit-input-placeholder {
   color: #ecf0f1;
}

:-moz-placeholder { /* Firefox 18- */
   color: #ecf0f1;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #ecf0f1;  
}

:-ms-input-placeholder {  
   color: #ecf0f1;  
}
</style>