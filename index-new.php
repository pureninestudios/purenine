<?php include('header.php'); ?>

	<div id="hero-wrap" class="hero-wrap">
	
		<?php
			$heroes = array(
				'twitch',
				'madden',
				'proactiv',
				'lol',
				'audiomack',
				'history'
			);
			shuffle($heroes);
		?>
		
		
		<div class="panel" data-0="top:0%" data-200p="top:0%" data-400p="top:-100%" style="background-image:url('img/<?php echo $heroes[0];?>-image.jpg')"></div>
		
		<div class="panel" data-0="top:0%" data-600p="top:0%" data-800p="top:-100%" style="background-image:url('img/<?php echo $heroes[1];?>-image.jpg')"></div>
		
		<div class="panel" data-0="top:0%" data-1000p="top:0%" data-1200p="top:-100%" style="background-image:url('img/<?php echo $heroes[2];?>-image.jpg')"></div>
				
		<div class="panel" data-0="top:0%" data-1400p="top:0%" data-1600p="top:-100%" style="background-image:url('img/<?php echo $heroes[3];?>-image.jpg')"></div>
		
		<div class="panel" data-0="top:0%" data-1800p="top:0%" data-2000p="top:-100%" style="background-image:url('img/<?php echo $heroes[4];?>-image.jpg')"></div>
		
		<div class="panel" data-0="top:0%" data-2200p="top:0%" data-2400p="top:-100%" style="background-image:url('img/<?php echo $heroes[5];?>-image.jpg')"></div>
	
	</div><!--/.hero-wrap-->

<?php include('footer.php'); ?>



