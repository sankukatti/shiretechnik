<section class="footer-section background-blue">
	<div class="container">
		<div class="row">

			<div class="col-sm-3">
				<strong class="">Address</strong>
				<div class="address">	
					
					<p>No.8, Muthu Garden 2nd Street,</p>
					<p>Sivan Koil Street,</p>
					<p>Kodambakkam,</p>
					<p>Chennai 600 024.</p>
					<p>Tamilnadu.</p>
				</div>	
			</div>
			
			<div class="col-sm-5">
				<strong class="">Contact us</strong>
				<div id="contact-us-block" class="contact-us-block">
					
					<form role="form" method="post" action="/contact">
						<div class="row">
							<div class="form-group col-sm-8">
								<label class="sr-only" for="email">Email address:</label>
		    					<input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="col-sm-4">
								<button type="submit" class="btn btn-default">Contact now</button>		
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-sm-4">
				<strong class="">Meet us</strong>
				<div class="social-images-block">
					
					<a href=""><img src="/images/socialIcons/facebook.png"></a>
					<a href=""><img src="/images/socialIcons/google.png"></a>
					<a href=""><img src="/images/socialIcons/linkedin.png"></a>
					<!-- <a href=""><img src="/images/socialIcons/twitter.png"></a> -->
					<a href=""><img src="/images/socialIcons/youtube.png"></a>
				</div>
			</div>
			
		</div>
	</div>
</section>