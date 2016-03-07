<?php include ('header.php'); ?>

	<div id="homepage" class="homepage">
	
		<section id="hero" class="hero">
		
			<div class="hero-inner full-height">
			
				<img src="assets/img/heroes/history-hero.png" alt="History Channel"/>
			
			</div><!--/.hero-inner-->
		
		</section><!--/#hero-->
		
		<?php
			include ('modules/section-studio.php');
			include ('modules/section-work.php');
			include ('modules/section-contact.php');
		?>
	
	</div><!--/#homepage-->

<?php include ('footer.php'); ?>