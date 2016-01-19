 <?php include('header.php'); ?>

<?php include('menu-hp.php'); ?>

	<div class="hero">
	
		<div class="logo-main home fade-in faded"><a href="index.php"><img class="logo" src="img/logo@2x.png" width="110" height="24" data-pin-nopin="true"></a></div>
	
		<div class="hero-inner">
		
			<h1>We are a digital studio that offer a variety <br/>of solutions in <span>product development, <br/>mobile</span> and <span>visual design.</span></h1>
			
			<?php
				$heroes = array(
					'twitch',
					'madden',
					'proactiv',
					'penzoil',
					'audiomack'
				);
			?>
			
			<img src="img/<?php echo $heroes[array_rand($heroes)]; ?>-image.jpg" alt="#"/>
		
		</div><!--/.hero-inner-->
	
	</div><!--/.hero-->

<div id="container" class="container">


<section id="works" class="fade-in fade-in-up faded"> 


			<ul class="grid cs-style-3 clearfix row">
				<!-- Work -->
				<?php /*
				<li style="background-color:#422673">
					<a href="madden.php"><figure class="work1">
						<img src="http://purenine.s3-us-west-2.amazonaws.com/wp-content/uploads/2016/01/04011228/hp-madden.jpg">
						<figcaption style="background-color:#422673">
							<h3>Madden Challenge</h3>
							<p class="name">EA Sports</p>
						</figcaption>
					</figure>
					</a>
				</li>
				*/?>
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#6B254C">
						<img src="portfolio/hp-brenmar.jpg" style="visibility:hidden;display:block">
						<a href="brenmar.php">
						<div class="atvImg">
						   <img src="portfolio/hp-brenmar.jpg">
						
						   <div class="atvImg-layer" data-img="portfolio/hp-brenmar.jpg"></div>
						   <div class="atvImg-layer" data-img="portfolio/hp-brenmar.jpg"></div>
						</div>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item"  style="background-color:#021E36;">
						
						<img src="portfolio/hp-pga.jpg" style="visibility:hidden;display:block">
						<a href="http://www.pgatour.com">
						<div class="atvImg">
						   <img src="portfolio/hp-brenmar.jpg">
						
						   <div class="atvImg-layer" data-img="portfolio/hp-pga.jpg"></div>
						   <div class="atvImg-layer" data-img="portfolio/hp-pga.jpg"></div>
						</div>
						</a>
						
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item"  style="background-color:#54A1A9">
						
						<img src="portfolio/hp-proactiv.jpg" style="visibility:hidden;display:block">
						<a href="http://www.proactiv.com/how-does-proactiv-work.html">
						<div class="atvImg">
						   <img src="portfolio/hp-proactiv.jpg">
						
						   <div class="atvImg-layer" data-img="portfolio/hp-proactiv.jpg"></div>
						   <div class="atvImg-layer" data-img="portfolio/hp-proactiv.jpg"></div>
						</div>
						</a>
						
					</div>
				
				</li><!--/.item-wrap-->
				
				<?php /*
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#124074">
						<a href="http://www.guardianlife.com"><figure class="work4">
							<img src="portfolio/hp-guardian.jpg">
							<figcaption style="background-color:#124074">
								<h3>Guardian Life</h3>
								<p class="name">Guardianlife.com</p>
							</figcaption>
						</figure>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#323232">
						<a href="http://www.audiomack.com"><figure class="work5">
							<img src="portfolio/hp-am.jpg">
							<figcaption style="background-color:#323232">
								<h3>Audiomack</h3>
								<p class="name">Audiomack.com</p>
							</figcaption>
						</figure>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#353B4B">
						<a href="activision.php"><figure class="work6">
							<img src="portfolio/hp-activision.jpg">
							<figcaption style="background-color:#353B4B">
								<h3>Activision</h3>
								<p class="name">Haven Agency</p>
							</figcaption>
						</figure>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#303030">
						<a href="pennzoil.php"><figure class="work7">
							<img src="portfolio/hp-pennzoil.jpg">
							<figcaption style="background-color:#303030">
								<h3>Pennzoil</h3>
								<p class="name">Haven Agency</p>
							</figcaption>
						</figure>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#8F5EA0">
						<a href="1d.php"><figure class="work7">
							<img src="portfolio/hp-1d.jpg">
							<figcaption style="background-color:#8F5EA0">
								<h3>One Direction</h3>
								<p class="name">Livenation</p>
							</figcaption>
						</figure>
						</a>
					</div>

				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
					
					<div class="grid-item" style="background-color:#415266">
						<a href="highlights.php"><figure class="work7">
							<img src="portfolio/hp-highlights.jpg">
							<figcaption style="background-color:#415266">
								<h3>Highlights</h3>
								<p class="name">Highlights.com</p>
							</figcaption>
						</figure>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#024D77">
						<a href="bio.php"><figure class="work7">
							<img src="portfolio/hp-bio.jpg">
							<figcaption style="background-color:#024D77">
								<h3>Biography.com</h3>
								<p class="name">A+E Networks</p>
							</figcaption>
						</figure>
						</a>
					</div>	
					
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
					
					<div class="grid-item" style="background-color:#C91A18">
						<a href="indycar.php"><figure class="work7">
							<img src="portfolio/hp-indy.jpg">
							<figcaption style="background-color:#C91A18">
								<h3>Indy Car</h3>
								<p class="name">Omnigon</p>
							</figcaption>
						</figure>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#666666">
						<a href="toyota.php"><figure class="work7">
							<img src="portfolio/hp-toyota.jpg">
							<figcaption style="background-color:#666666">
								<h3>Toyota</h3>
								<p class="name">People.com</p>
							</figcaption>
						</figure>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#232323">
						<a href="jt.php"><figure class="work7">
							<img src="portfolio/hp-jt.jpg">
							<figcaption style="background-color:#232323">
								<h3>Legends of Summer Tour </h3>
								<p class="name">Livenation</p>
							</figcaption>
						</figure>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#301011">
						<a href="mortalkombat.php"><figure class="work7">
							<img src="portfolio/hp-mk.jpg">
							<figcaption style="background-color:#301011">
								<h3>Mortal Kombat</h3>
								<p class="name">Haven Agency</p>
							</figcaption>
						</figure>
						</a>
					</div>
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item" style="background-color:#442956">
						<a href="thq.php"><figure class="work7">
							<img src="portfolio/hp-thq.jpg">
							<figcaption style="background-color:#442956">
								<h3>THQ.com</h3>
								<p class="name">Haven Agency</p>
							</figcaption>
						</figure>
						</a>
					</div>	
				
				</li><!--/.item-wrap-->
				
				*/ ?>
								
			</ul>


</section>

<!-- END PORTFOLIO SECTION ############################################### -->



<!-- METHOD SECTION ############################################### -->


<section id="method">
		
		<!-- Title --> 
			
		<h3>Our Process.</h3>
		

		<!-- Content --> 

		<div class="row scrollme">

			<!-- Method -->
			<div class="four columns whatwedo" data-when="enter" data-from="1" data-to="0.2" data-opacity="0" data-translatey="0" data-rotatez="0">
				
				<div class="img-ico">
					<img src="img/basic_lightbulb.svg" alt="ico1" style="border-bottom:1px solid #bcd325; padding-bottom:30px;" width="60" >
				</div>
				
				<h4>Strategy</h4>
			
				<p>From digital advertising campaigns to product design, we approach our projects with strategic and creative thinking.</p>
			
			</div>
			
			<!-- Method -->
			<div class=" four columns whatwedo" data-when="enter" data-from="1" data-to="0.3" data-opacity="0" data-translatey="0" data-rotatez="0">
				<div class="img-ico">
					<img src="img/basic_laptop.svg" alt="ico1" style="border-bottom:1px solid #bcd325; padding-bottom:30px;" width="60">
				</div>
				
				<h4>Design</h4>
			
				<p>We partner with our clients to create big ideas and translate them into full digital experiences.</p>
				
			</div>
			
			<!-- Method -->
			<div class=" four columns whatwedo" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-translatey="0" data-rotatez="0">
				
				<div class="img-ico">
					<img src="img/basic_settings.svg" alt="ico1" style="border-bottom:1px solid #bcd325; padding-bottom:30px;" width="60">
				</div>
				
				<h4>Build</h4>
			
				<p>From prototyping to fully customizable systems, we use the latest front & back end technologies.</p>
			
			</div>


		</div> <!-- End row div -->  
			
</section>

<!-- END METHOD SECTION ############################################### -->



<!--  Start of Studio Section -->

<section class="studio scrollme " id="studio" >

	<div class="instagram-links clearfix">
	
		<div class="ig-link"><a href="#"><img src="img/ig-image-1.jpg" alt=""/></a></div>
		
		<div class="ig-link"><a href="#"><img src="img/ig-image-2.jpg" alt=""/></a></div>
		
		<div class="ig-link"><a href="#"><img src="img/ig-image-3.jpg" alt=""/></a></div>
		
		<div class="ig-link"><a href="#"><img src="img/ig-image-4.jpg" alt=""/></a></div>
	
	</div><!--/.instagram-links-->
	
	<div class="studio-content">
	
		<h1 data-when="enter" data-from="1" data-to="0.2" data-opacity="0" data-translatey="0" data-rotatez="0">The Studio.</h1>
		<p style="border-bottom:2px solid #bcd325; width:100px; height:2px; margin:0 auto;" data-when="enter" data-from="1" data-to="0.3" data-opacity="0" data-translatey="0" data-rotatez="0"></p>
		<p style="padding-top:20px;"data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-translatey="0" data-rotatez="0">We are a digital agency comprised of a talented team of professionals, founded by <a href="https://www.linkedin.com/in/thomasklinger" target="_blank">Thomas Klinger</a>.</p>
		<p data-when="enter" data-from="1" data-to="0.5" data-opacity="0" data-translatey="0" data-rotatez="0">We take pride in any task assigned and have estblished a reputation for our work to include, but not limited to - a variety of solutions in visual design. web development and mobile applications.</p>
		<p data-when="enter" data-from="1" data-to="0.6" data-opacity="0" data-translatey="0" data-rotatez="0">In an effort to drive measurable results and exceed client expectations, we will provide direction from concept to completion - and custom-assemble a dynamic team that is tailored to meet your needs.</p>
	
		<a class="button" href="mailto:hello@purenine.com" data-when="enter" data-from="1" data-to="0.7" data-opacity="0" data-translatey="0" data-rotatez="0">Contact us today!</a>
	
	</div><!--/.studio-content-->
	
</section>

<!-- End of Studio Section -->



<?php include('footer.php'); ?>



