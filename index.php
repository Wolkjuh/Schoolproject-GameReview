<?php
    include_once 'header.php';
?>

<div class="welkomsbericht">
	<?php
		if (isset($_SESSION["useruid"])) {
			echo "<p>Welkom " . $_SESSION["useruid"] . "!</p>";
		}
	?>
</div>

<div class="index__tekst">
	<p>Welkom bij Gamestars!<br><br>
		De rating voor jouw<br> favoriete game!		
	</p>
</div>

<div class="slideshow-container">

  <div class="mySlides fade">
    <img src="assets/images/cc.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="assets/images/csgo.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="assets/images/valorant.avif" style="width:100%">
  </div>

</div>
<br>

<?php   
    include_once 'footer.php';
?>