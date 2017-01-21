@extends('layouts.app')

@section('title', 'Contact us')

@section('content')
	<section class="contact-us">
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
					<p>Ph: 080-41149803</p>
				</div>	
				<hr/>
				<div class="address">	
					
					<p>#245, Shivakunj, 1st main, 3rd cross,</p>
					<p>K.E.B layout,</p>
					<p>Sanjaynagar</p>
					<p>Bangalore 560 094,</p>
					<p>Karnataka.</p>
					<p>Ph: 080-41149803</p>
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
@endsection