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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/css/all.css">
    <script src="https://use.fontawesome.com/a6f0361695.js"></script>
    

</head>
<body>
    
    <header>
        <section class="navigatie">
            <article class="navigatiebalk">
                <nav>
                    <ul class="nav__links">
                        <li><a href="index.php">Home</a></li>
                        <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<li><a href='reviews.php'>Reviews</a></li>";
                            } 
                        ?>
                        <li><a href="rating.php">Rating</a></li>
                        <li><a href="#">Merch</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<li><a href='#'>Profiel</a></li>";
                                echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                            } else {
                                echo "<li><a href='signup.php'>Registreer</a></li>";
                                echo "<li><a href='login.php'>Log In</a></li>";
                            }
                        ?>
                    </ul>
                </nav> 
            </article>  
        </section>

    </header>