<?php
    session_start();
    $session_value=(isset($_SESSION['userid']))?$_SESSION['userid']:''; 
?>

<!doctype html>
<html lang="en">
    <head>
        <!---->
        <script >var jsessionid='<?php echo $session_value;?>';</script>  
        <script src="js/ajax-utils.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet"> 
        <!--css e script-->
        <link rel="stylesheet" href="css/styles.css">
        <title>POSTIT</title>
  </head>
  <body>         
<header > 
        <nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top">
                <div class="container-fluid"> 
                        <img src="./images/POSTITnobg.png" alt="na foto" id="logo">
                        <a class="navbar-brand" href="#">POSTIT</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <button class="btn btn-success button"  onclick="typenote()">New PostIT</button>
                
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                        <li class="nav-item si"><a class="nav-link active " aria-current="page" href="#">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#foot">Contacts</a></li>
                                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> User</a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                        <li><a class="dropdown-item" href="includes/logout.inc.php">Sign Out</a></li>
                                                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                                        <li><a class="dropdown-item" href="help.php">Help</a></li>
                                                </ul>
                                        </li>
                                </ul>
                        </div>
                </div>
      </nav>
</header>
