<?php
	// Get filename
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
	
	$hp_basename = 'index';
	/*
	useage:
	if ($basename == 'index'){
		echo 'You are on the homepage';
	} elseif ($basename == 'studio'){
		echo 'You are on the studio page';
	}
	
	Possible basenames:
		index
		studio
		work
		project
		blog
		contact
	*/
?>


<!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<title>PURENINE | The design studio of Thomas Klinger</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="PURENINE | The design studio of Thomas Klinger">
	<meta name="keywords" content="UI, UX, visual design, app design, mobile">

	<link rel="shortcut icon" href="img/favicon.png">
	<link rel="image_src" href="img/site-image.png">
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,400italic,700italic,300italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CLora:400,700italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	
	<style type="text/css" id="peter-custom-css">

		<?php if ($basename == $hp_basename) : ?>
			
			header#top { background-color: #c1c6c0; overflow:hidden;background-image: url(img/hero-p9.jpg); }
			
		<?php else : ?>
		
			header#top { background-color: #000; background-image: url(img/sample-header.png); }
		
		<?php endif; ?>
	
	</style>
	
</head>
<body>

	<div class="green-loader"></div>
	<div class="page-loader">
		<span>P&nbsp;9</span>
	</div>
	
	<?php
		$header_class = '';
		if ($basename == $hp_basename){
			$header_class = ' full-height';
		}
	?>
	
	<header id="top" class="light-colors<?php echo $header_class; ?>" role="banner">
		<div class="container">
			<div class="inner">

				<div class="site-title">
					<h1 class="text"><a href="index.php"><img src="img/p9-logo.svg" width="110" style="padding-top:7px;"></a></h1>
					<a href="#site-menu" class="site-menu-toggle">
						<span class="sr-only">Toggle navigation</span>
						<em class="first"></em><em class="middle"></em><em class="last"></em>
					</a>
				</div>

				<div id="site-menu">
					<nav>
						<ul>
							<li class="<?php if ($basename == $hp_basename){ echo 'current-menu-item'; } ?>">
								<a href="index.php">Home</a>
							</li>
							<li class="<?php if ($basename == 'studio'){ echo 'current-menu-item'; } ?>">
								<a href="studio.php">Studio</a>
							</li>
							<li class="<?php if ($basename == 'work'){ echo 'current-menu-item'; } ?>">
								<a href="work.php">Projects</a>
							</li>
							<li class="<?php if ($basename == 'blog'){ echo 'current-menu-item'; } ?>">
								<a href="blog.php">News</a>
							</li>
							<li class="<?php if ($basename == 'contact'){ echo 'current-menu-item'; } ?>"><a href="contact.php">Contact</a></li>
							<li class="menu-item-search">
								<a href="" class="s-menu-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="menu-item-search">
								<a href="" class="s-menu-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="menu-item-search">
								<a href="" class="s-menu-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
						</ul>
					</nav>
				</div><!--/#site-menu-->

			</div><!--/.inner-->
			
			<?php if ($basename == $hp_basename) : ?>
			
				<div class="featured-info">
		
					<div class="row">
					
						<div class="col-sm-9 col-md-7 col-lg-6">
						
							<div class="hp-text">
								<h1><span class="animate-me">A digital<br>creative studio.</span></h1>
								<h2 class="text-white"><span class="animate-me">We assemble a dynamic team, tailored to meet your needs,<br> in an effort to drive measurable results and exceed<br>expectations.</span></h2>
							</div>
							
						</div><!--/.col-sm-9-->
						
						<div class="clear"></div>
						
						<div class="col-sm-7 col-md-6 col-lg-5">
							<p class="fade-me-in"><a href="work.php" class="button underline green">View our work</a></p>
						</div>
						
					</div><!--/.row-->
					
				</div><!--/.featured-info-->
			
			<?php elseif ($basename == 'blog') : ?>
			
				<div class="featured-info">
				<div class="row">
					<div class="col-sm-10 col-md-9 col-lg-7">
						<h1 class="small-margin-bottom">Blog</h1>
						<h3><a href="post.html">1. Product Design Unification Study: Mobile Web Framework</a></h3>
						<h3><a href="post.html">2. Getting Good at Storytelling &amp; Other Superhuman Social Skills</a></h3>
						<h3><a href="post.html">3. Conducting User Research in Other Countries</a></h3>
						<h3><a href="post.html">4. The 30-Day Learning Challenge</a></h3>
						<h3><a href="post.html">5. Fine Art Oil Paintings Ð Ways to Preserve Paintings!</a></h3>
						<h3><a href="post.html">6. The Power of Visual Communication in Business</a></h3>
						<h3><a href="post.html">7. Three Factors That Are Compelling to Turn Travel Photos&hellip;</a></h3>
						<h3><a href="post.html">8. The 30 Day Learning Challange</a></h3>
						<h3><a href="post.html">9. Twitter: Better and Better Every Single Day</a></h3>
					</div>
				</div>
			</div>
			
			<?php else : ?>
			
				<div class="work-featured-info">
					<h1><?php echo $basename;?></h1>
				</div>
			
			<?php endif; ?>
			
		</div><!--/.container-->
		
	</header><!--/header-->