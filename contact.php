<?php include ('header.php'); ?>

	<main id="content" role="main">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-4 col-md-3">
							<h6 class="small-margin-bottom">Address</h6>
							<p class="no-bottom">1 Peter's Block, <br>Brooklyn, NY 11201, <br>United States</p>
							<hr class="small-margin">
							<h6 class="small-margin-bottom">Phone</h6>
							<p class="no-bottom">914.290.4161</p>
							<hr class="small-margin">
							<h6 class="small-margin-bottom">Email</h6>
							<p class="no-bottom">hello@</p>
							<hr class="small-margin">
							<p class="social-links double-margin-bottom"><a href="#" class="fa fa-lg fa-facebook"></a> <a href="#" class="fa fa-lg fa-twitter"></a> <a href="#" class="fa fa-lg fa-pinterest"></a></p>
						</div>
						<div class="col-sm-7 col-sm-offset-1 col-md-8 col-md-offset-1">
							<form action="contact.php">
								<h6 class="small-margin-bottom visible-xs">Send message</h6>
								<div class="row">
									<div class="col-md-6">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" placeholder="Your name..." required>
									</div>
									<div class="col-md-6">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" placeholder="Your email..." required>
									</div>
								</div>
								<label for="message">Message</label>
								<textarea class="double-margin-bottom" name="message" id="message" cols="30" rows="10" placeholder="Here goes the message..." required></textarea>
								<input type="submit" class="underline" value="Send Message">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php include ('footer.php'); ?>