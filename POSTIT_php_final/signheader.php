 
 
<!DOCTYPE html>
<html lang="en">
        <head>
                <!---->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet"> 
                <!--css e script-->
                <script src="js/ajax-utils.js"></script>
                <link rel="stylesheet" href="css/styles.css">
            
                <title>signpage</title>
        </head>
        <body>
                <header > 
                        <nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top">
                                <div class="container-fluid"> 
                                        <img src="./images/POSTITnobg.png" alt="una foto" id="logo">
                                        <a class="navbar-brand" href="#">POSTIT</a>

                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                <ul class="navbar-nav">
                                                        <li class="nav-item"><a class="nav-link" href="#foot">Contacts</a></li>
                                                        <?php
                                                                //in base alla pagina in cui sono cambio il contenuto della navbar
                                                                $urlcheck="index";
                                                                if(strpos($_SERVER['REQUEST_URI'],$urlcheck)==false){
                                                                        echo " <li class='nav-item'><a class='nav-link' href='index.php'>Sign In</a></li>";
                                                                }
                                                                else{
                                                                        echo "<li class='navitem'><a  class='nav-link' href='signup.php'>Sign Up</a></li>";
                                                                }
                                                        ?>
                                                </ul>
                                        </div>
                                </div>
                        </nav>
                </header>
