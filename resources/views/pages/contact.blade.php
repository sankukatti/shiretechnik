@extends('layouts.app')

@section('title', 'Contact us')

@section('content')
	<section class="contact-us">
	<div class="container">
		<div class="row">

			<div class="col-sm-3">
				<strong class="">Address</strong>


				<div class="address">	
					<strong class="">Bangalore office</strong>	
					<p>166, 5th Main,</p>
					<p>K.E.B layout,</p>
					<p>Sanjaynagar</p>
					<p>Bangalore 560 094,</p>
					<p>Karnataka.</p>
					<p>Email: info@shiretechnik.com</p>
					<p>Ph: 080-41149803</p>
				</div>	

				<hr/>
				<div class="address">
					<strong class="">Chennai office</strong>
					<p>No: 51, Sigaram Towers,</p>
					<p>Kumaran Colony Main Road,</p>
					<p>Next to Apollo Medical Center,</p>
					<p>Vadapalani,</p>
					<p>Chennai 600 026.</p>
					<p>Tamilnadu.</p>
					<p>Email: info@shiretechnik.com</p>
					<!-- <p>Ph: +91-9600117100</p> -->
				</div>	
 
			</div>
			
			<div class="col-sm-5">
				<strong class="">Contact us</strong>
				<div id="contact-us-block" class="contact-us-block">
					
					<form role="form" method="post" action="/contact">
						<div class="row">
							<div class="col-sm-2">
								
							</div>
							<div class="col-sm-8">
								<div class="form-group">
									<label class="sr-only" for="email">Full name</label>
			    					<input type="text" name="name" placeholder="Full name" class="form-control" id="email" required>
								</div>

								<div class="form-group">
									<label class="sr-only" for="email">Email address:</label>
			    					<input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
								</div>

								<div class="form-group">
									<label class="sr-only" for="email">Message</label>
			    					<textarea name="messageTxt" class="form-control" placeholder="Message"></textarea>
								</div>
								
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-default background-blue white">Contact now</button>
							</div>							
							<div class="col-sm-2">
								
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-sm-4">
				<strong class="">Meet us</strong>
				<div class="social-images-block">
					
					<!-- <a href=""><img src="/images/socialIcons/facebook.png"></a> -->
					<a target="_blank" href=""><img src="/images/socialIcons/google.png"></a>
					<a target="_blank" href=""><img src="/images/socialIcons/linkedin.png"></a>
					<!-- <a href=""><img src="/images/socialIcons/twitter.png"></a> -->
					<a target="_blank" href="https://www.youtube.com/channel/UCKwD3x3tNsOECh5c24Wzb6g"><img src="/images/socialIcons/youtube.png"></a>
				</div>
			</div>
			
		</div>
	</div>
</section>
@endsection
<style type="text/css">
	.footer-section {
		position: fixed;
		width: 100%;
		bottom: 0;
	}
</style>