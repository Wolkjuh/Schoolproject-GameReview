<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php
    include_once 'header.php';
    ?>

    <main>

    <section class="welkomsbericht">
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<p>Welkom " . $_SESSION["useruid"] . "!</p>";
            } 
        ?>
    </section>
        
    </main>

</body>
</html>