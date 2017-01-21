@extends('layouts.app')

@section('title', 'Temp')

@section('content')
	<section class="turboSoftware">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="title-text bold blue title-spacing capitalize">
						SOFTWARE
					</p>

					<p class="block text justify">
						We are authorised partner for CFD Support 
						<a href="http://www.cfdsupport.com" target="_blank">Link</a>
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-5">
					<img class="image small" src="/images/turboSoftware/cfdSupport.jpg">
				</div>

				<div class="col-sm-6">
					<img class="image" src="/images/turboSoftware/img2.png">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<img class="image" src="/images/turboSoftware/img3.png">	
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 book1-section">
					<a href="http://www.cfdsupport.com/turbomachinery-cfd.html" target="_blank">
						<p class="sub-title-text blue">
							<strong>Turbo machinery</strong>
							<span> – Open FOAM® Based CFD Work Flow for Rotary Machinery </span> 
						</p>
					</a>	
					<a href="http://www.cfdsupport.com/turbomachinery-cfd.html" target="_blank">
						<img src="/images/turboSoftware/book1.png">
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 book1-section">
					<a href="http://www.cfdsupport.com/turbo-blade-post.html" target="_blank">
						<p class="sub-title-text blue">
							<strong>Turbo Blade Post</strong>
							<span> Post processing Para View Plug-in </span> 
						</p>
					</a>	
					<a href="http://www.cfdsupport.com/turbo-blade-post.html" target="_blank">
						<img src="/images/turboSoftware/book2.png">
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection