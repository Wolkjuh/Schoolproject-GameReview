<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/css/all.css">
    <script src="https://use.fontawesome.com/a6f0361695.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    

</head>
<body>
    
    <header>
        <section class="navigatie">
            <article class="navigatiebalk">
                <nav>
                    <ul class="nav__links">
                        <div class="topnav">
                            <div id="navLinks">
                                <li><a href="index.php">Home</a></li>
                                <?php
                                    if (isset($_SESSION["useruid"])) {
                                        echo "<li><a href='reviews.php'>Review</a></li>";
                                    } 
                                ?>
                                <li><a href="rating.php">Rating</a></li>
                                <li><a href="merch.php">Merch</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <?php
                                    if (isset($_SESSION["useruid"])) {
                                        echo "<li><a href='#'>Profiel</a></li>";
                                        echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                                    } else {
                                        echo "<li><a href='signup.php'>Registreer</a></li>";
                                        echo "<li><a href='login.php'>Log In</a></li>";
                                    }
                                ?>
                                <li class="afrekenen"><a href="#">Afrekenen</a></li>
                            </div>
                            <a href="javascript:void(0);" class="burgerIcon" onclick="respNav()">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </ul>
                </nav> 
            </article>  
        </section>

    </header>