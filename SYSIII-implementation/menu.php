<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="ads.php">Posts</a></li>
        <li><a href="my_ads.php">My Posts</a></li>
        
        <li><a href="my_profile.php">Profile</a></li>
        <li><a href="search_for_user_form.php">Search For User</a></li>
        <li><a href="messages.php">Inbox</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <li><a style="color: #66FF99; text-shadow: 1px 1px gray; font-size: 30px;" href="#">Jamming Buddy Finder</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
        
      </ul>
    </div>
  </div>
</nav>