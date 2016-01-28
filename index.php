 <?php include('header.php'); ?>

<?php include('menu-hp.php'); ?>

	<div class="hero">
	
		<div class="logo-main home fade-in faded"><a href="index.php"><img class="logo" src="https://s3-us-west-2.amazonaws.com/purenine/logo%402x.png" width="110" height="24" data-pin-nopin="true"></a></div>
	
		<div class="hero-inner">
		
			<h1>We are a digital studio that offer a variety <br/>of solutions in <span>product development, <br/>mobile</span> and <span>visual design.</span></h1>
			
			<ul class="bxslider">
			
				<?php
					$heroes = array(
						'twitch',
						'madden',
						'proactiv',
						'audiomack'
					);
					shuffle($heroes);
					foreach ($heroes as $h) :
				?>
				
					<li>
					
						<div class="slide-inner">
					
							<img class="houdini" src="img/<?php echo $h; ?>-image.jpg" alt="#"/>
							<img src="img/<?php echo $h; ?>-image.jpg" alt="#"/>
						
						</div><!--/.slide-inner-->
						
					</li>
				
				<?php
					endforeach;
				?>
				
			
			</ul><!--/.bx-slider-->
			
		</div><!--/.hero-inner-->
	
	</div><!--/.hero-->

<div id="container" class="container">


<section id="works" class="fade-in fade-in-up faded"> 


			<ul class="grid cs-style-3 clearfix row">


				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="madden.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-madden.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#422673"></div>
								
								<div class="overlay-content">
							
									<p class="name">GoodGame Agency</p>
									
									<h3>Madden Live Challenge</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="brenmar.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-brenmar.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#6B254C"></div>
								
								<div class="overlay-content">
							
									<p class="name">Audiomack</p>
									
									<h3>Brenmar Remix Contest</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="http://www.pgatour.com">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-pga.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#021E36;"></div>
								
								<div class="overlay-content">
							
									<p class="name">Omnigon</p>
									
									<h3>PGA Tour</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="http://www.proactiv.com/how-does-proactiv-work.html">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-proactiv.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#54A1A9"></div>
								
								<div class="overlay-content">
							
									<p class="name">Haven Agency</p>
									
									<h3>Proactiv+</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="http://www.guardianlife.com">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-guardian.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#124074"></div>
								
								<div class="overlay-content">
							
									<p class="name">Guardianlife.com</p>
									
									<h3>Guardian Life</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="http://www.audiomack.com">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-am.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#323232"></div>
								
								<div class="overlay-content">
							
									<p class="name">Audiomack.com</p>
									
									<h3>Audiomack</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="activision.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-activision.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#353B4B"></div>
								
								<div class="overlay-content">
							
									<p class="name">Haven Agency</p>
									
									<h3>Activision</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="pennzoil.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-pennzoil.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#303030"></div>
								
								<div class="overlay-content">
							
									<p class="name">Haven Agency</p>
									
									<h3>Pennzoil</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="1d.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-1d.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#8F5EA0"></div>
								
								<div class="overlay-content">
							
									<p class="name">Livenation</p>
									
									<h3>One Direction</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="highlights.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-highlights.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#415266"></div>
								
								<div class="overlay-content">
							
									<p class="name">Highlights.com</p>
									
									<h3>Highlights</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
						
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="bio.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-bio.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#024D77"></div>
								
								<div class="overlay-content">
							
									<p class="name">A+E Networks</p>
									
									<h3>Biography.com</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->

				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="indycar.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-indy.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#C91A18"></div>
								
								<div class="overlay-content">
							
									<p class="name">Omnigon</p>
									
									<h3>Indy Car</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="toyota.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-toyota.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#666666"></div>
								
								<div class="overlay-content">
							
									<p class="name">People.com</p>
									
									<h3>Toyota</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
				
				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="jt.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-jt.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#232323"></div>
								
								<div class="overlay-content">
							
									<p class="name">Livenation</p>
									
									<h3>Legends of Summer Tour </h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->

				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="mortalkombat.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-mk.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#301011"></div>
								
								<div class="overlay-content">
							
									<p class="name">Haven Agency</p>
									
									<h3>Mortal Kombat</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->

				<li class="item-wrap">
				
					<div class="grid-item">
					
						<a href="thq.php">
						
							<img src="https://s3-us-west-2.amazonaws.com/purenine/hp-thq.jpg">
							
							<div class="overlay">
							
								<div class="faux-bg" style="background-color:#442956"></div>
								
								<div class="overlay-content">
							
									<p class="name">Haven Agency</p>
									
									<h3>THQ.com</h3>
								
								</div><!--/.overlay-content-->
								
							</div><!--/.overlay-->
	
						</a>
						
					</div><!--/.grid-item-->
				
				</li><!--/.item-wrap-->
								
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
					<img src="https://s3-us-west-2.amazonaws.com/purenine/basic_lightbulb.svg" alt="ico1" style="border-bottom:1px solid #bcd325; padding-bottom:30px;" width="60" >
				</div>
				
				<h4>Strategy</h4>
			
				<p>From digital advertising campaigns to product design, we approach our projects with strategic and creative thinking.</p>
			
			</div>
			
			<!-- Method -->
			<div class=" four columns whatwedo" data-when="enter" data-from="1" data-to="0.3" data-opacity="0" data-translatey="0" data-rotatez="0">
				<div class="img-ico">
					<img src="https://s3-us-west-2.amazonaws.com/purenine/basic_laptop.svg" alt="ico1" style="border-bottom:1px solid #bcd325; padding-bottom:30px;" width="60">
				</div>
				
				<h4>Design</h4>
			
				<p>We partner with our clients to create big ideas and translate them into full digital experiences.</p>
				
			</div>
			
			<!-- Method -->
			<div class=" four columns whatwedo" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-translatey="0" data-rotatez="0">
				
				<div class="img-ico">
					<img src="https://s3-us-west-2.amazonaws.com/purenine/basic_settings.svg" alt="ico1" style="border-bottom:1px solid #bcd325; padding-bottom:30px;" width="60">
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
	
		<div class="ig-link"><a href="#"><img src="https://s3-us-west-2.amazonaws.com/purenine/ig-image-1.jpg" alt=""/></a></div>
		
		<div class="ig-link"><a href="#"><img src="https://s3-us-west-2.amazonaws.com/purenine/ig-image-2.jpg" alt=""/></a></div>
		
		<div class="ig-link"><a href="#"><img src="https://s3-us-west-2.amazonaws.com/purenine/ig-image-3.jpg" alt=""/></a></div>
		
		<div class="ig-link"><a href="#"><img src="https://s3-us-west-2.amazonaws.com/purenine/ig-image-4.jpg" alt=""/></a></div>
	
	</div><!--/.instagram-links-->
	
	<div class="studio-content">
	
		<h1>The Studio.</h1>
		<p style="border-bottom:2px solid #bcd325; width:100px; height:2px; margin:0 auto;" ></p>
		<p>We take pride in any task assigned and have estblished a reputation for our work to include, but not limited to - a variety of solutions in visual design. web development and mobile applications.</p>
		<p>In an effort to drive measurable results and exceed client expectations, we will provide direction from concept to completion - and custom-assemble a dynamic team that is tailored to meet your needs.</p>
		<p>We are a digital agency comprised of a talented team of professionals, founded by <a href="https://www.linkedin.com/in/thomasklinger" target="_blank">Thomas Klinger</a>.</p>
		<a class="button" href="mailto:hello@purenine.com" data-when="enter" data-from="1" data-to="0.7" data-opacity="0" data-translatey="0" data-rotatez="0">Contact us today!</a>
	
	</div><!--/.studio-content-->
	
</section>

<!-- End of Studio Section -->



<?php include('footer.php'); ?>



