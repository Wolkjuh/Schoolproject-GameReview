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