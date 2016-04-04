<?php include ('header.php'); ?>

	<div id="homepage" class="homepage">
	
		<section id="hero" class="hero">
		
			<div class="hero-inner full-height">
			
				<?php
					// Define local file path
					$local = 'assets/img/heroes/';
					// Define heros
					$heroes = array(
						$local . 'history-hero.png',
						$local . 'history-hero.png',
					);
					shuffle($heroes);
				?>
			
				<img src="<?php echo $heroes[0];?>" alt=""/>
			
			</div><!--/.hero-inner-->
		
		</section><!--/#hero-->
		
		<?php
			include ('modules/section-studio.php');
			include ('modules/section-work.php');
			include ('modules/section-contact.php');
		?>
	
	</div><!--/#homepage-->

<?php include ('footer.php'); ?>