    <?php
    include_once 'header.php';
    ?>

    <main>
        <section class="login-class">
            <h1>Log In</h1>
            <form class="login-form" action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Gebruikersnaam / Email...">
                <input type="password" name="pwd" placeholder="Wachtwoord...">
                <button type="submit" name="submit">Log In!</button>
            </form>

            <?php

                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyimput") {
                        echo "<p>Vul alle velden in!</p>";
                    }
                    else if ($_GET["error"] == "wronglogin") {
                        echo "<p>De opgegeven login is incorrect!</p>";
                    }
                }
            ?>

        </section>
    </main>


    <?php   
    include_once 'footer.php';
    ?>