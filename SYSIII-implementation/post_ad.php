<?php

session_start();
include_once "menu.php";
include "db_conn.php";

$id = $_SESSION['id'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $date = $_POST['date'];
    $location = trim($_POST['location']);
    $instrument = $_POST['instrument'];
    $skill = $_POST['skill']; 
    $genre = $_POST['genre']; 
    echo "id: ".$id;
    echo "title: ".$title;
    echo "description: ".$description;
    echo "date: ".$date;
    echo "location: ".$location;
    echo "instrument:" .$instrument;
    echo "skill: ".$skill;
  
    $sql = "INSERT INTO `Ad` (`id`, `title`, `owner_id`, `description`, `location`, `date`, `instrument`, `skill`, `date_of_posting`,`genre`) VALUES (NULL,'$title', '$id', '$description', '$location', '$date', '$instrument' , '$skill', NULL, '$genre');";

    if($stat = mysqli_query($conn, $sql)) {
        header("Location: ads.php");
        echo "date: ".$date;
    } else {
        echo 'error';
    }
    

    }

?>


<h1>
  Post your Ad here :)
</h1>

<div>
  <form action="post_ad.php" method="post">
    <input type="text" name="title" class="formStyle" placeholder="Title" required />
    <input type="text" name="description" class="formStyle" placeholder="Description" required />
    <input type="datetime-local" name="date" class="formStyle" placeholder="Date" required />
    <input type="text" name="location" class="formStyle" placeholder="Location" required />
        
        <select class="formStyle" name="instrument">
        <option value="">Needed instrument:</option>
        <option value="guitar">Guitar</option>
        <option value="piano">Piano</option>
        <option value="drums">Drums</option>
        <option value="ukulele">Ukulele</option>
        <option value="voice">Singer</option>
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

    <input class="formButton" style = "border: 0"type="submit" value= "Submit" >
  </form> 
</div>

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