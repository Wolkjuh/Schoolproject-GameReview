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

        <div class="slideshow-container">

        <div class="mySlides fade">
        <img src="assets/images/cod.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="assets/images/valorant.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="assets/images/csgo.webp" style="width:100%">
        </div>


        <br>

        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        </div> 
        
    </main>

    <?php   
    include_once 'footer.php';
    ?>