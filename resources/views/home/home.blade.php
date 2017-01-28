@extends('layouts.app')

@section('title', 'Shiretechnik')

@section('content')

	<div class="home-page">
		<div class="container">
			<div class="slider">
				<div class="row">
					<div class="col-sm-12">
						<div id="homeCarousel" class="carousel slide" data-ride="carousel">
				            <!-- Indicators -->
				            <ol class="carousel-indicators">
				                @for ($i = 0; $i < count($files); $i++)
				                	@if ( $i == 0 )
								    	<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
								    @else
								    	<li data-target="#homeCarousel" data-slide-to="{{$i}}"></li>
								    @endif
				                @endfor
				            </ol>

				            <div class="carousel-inner carosel-css" role="listbox">

				            	@for ($i = 0; $i < count($files); $i++)
								    @if ( $i == 0 )
								    	<div class="item active">
								    @else
								    	<div class="item">
								    @endif
						                    <img src="images/slider/{{ $files[$i][0] }}" alt="Cfd3"/>
						                    @if( count($files[$i]) > 1 )
								            	<a href= @if( isset( $files[$i][1]['link'] ) ) 
								            				{{$files[$i][1]['link']}}
								            			@endif >
								            		<div class="carousel-caption">
								                        <h5>{{$files[$i][1]['title']}}</h5>
								                        
								                        @if( isset( $files[$i][1]['list'] ) )
								                        	<ul class="block list">
											
																@for ( $k = 0; $k < count( $files[$i][1]['list'] ); $k++ )
																	<li class="text">
																		{{ $files[$i][1]['list'][$k] }}
																	</li>
																@endfor
																
															</ul>
								                        @endif
								                        
								                        <p>{{$files[$i][1]['desc1']}}</p>
								                        <p>{{$files[$i][1]['desc2']}}</p>
								                    </div>
								            	</a>     
								                    
							                @endif
					                	</div>
								@endfor
				                

				            </div>

				            <!-- Left and right controls -->
				            <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
				                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				                <span class="sr-only">Previous</span>
				            </a>
				            <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
				                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				                <span class="sr-only">Next</span>
				            </a>
				        </div> <!-- END #homeCarousel -->
					</div>
				</div> 
			</div> <!-- END SLIDER -->
		</div> <!-- END CONTAINER -->

		<section class="after-header">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-6">
						<p class="headding blue bold">
							Why <span class="">Shiretechnik</span>?
						</p>	

						<div class="image-div">
							<img src="images/home/image1.png">
						</div>

						<ul class="list">
							<li>
								<p class="justify">
									<strong class="blue headding">Trusted Partner </strong>
									<span>Shiretechnik aligns with clients’ goals, and helps them to get insight to improve their product efficiency and reliability.  As a trusted partner, on and above the simulation software services, we shoulder our clients to achieve on the best designing and engineering of their products.</span>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Experienced </strong>
									<span>Shiretechnik’s workforce is highly experienced and talented with a wide range of industry backgrounds. Our core team is rich in experience of about two decades on engineering industries, and has outstanding capabilities on development of CFD codes and thermal simulation products, and has proven track records in employing the first time right methodologies. </span>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Innovation </strong>
									<span>Innovation is a part of our vision! Our innovative ideas and solutions helped our clients to accomplish their challenging design requirements, and to develop the best design in the world market.</span>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Flexible </strong>
									<span>Shiretechnik is highly flexible and efficient. We have worked on a large range of designs and have the skills to help you achieve your unique requirements. We can help you with all your simulation needs.</span>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Value Addition </strong>
									<span>You get our great care and attention to your projects at no additional cost. You receive highly professional and trusted advice, support and expertise.</span>
								</p>
							</li>
						</ul>
					</div>

					<div class="col-sm-6">
						<p class="headding blue bold">
							Why <span class="capital">cfd</span> with <span class="">Shiretechnik</span>?
							<a href="http://www.wildeboer.de/en/company-details/" class="brand-link">
									We are authorised solution partner for Wildeboer Bauteile GmbH
							</a>
							<img class="brand-image" src="/images/home/wildeboer.png"/>
						</p>	

						<div class="video-div">
							<video autoplay loop>
								<source src="/videos/TotalSim.mp4" type="video/mp4" />
								Your browser does not support the video tag.
							</video>
							<!-- <iframe type="text/html" 
							    src="http://www.youtube.com/embed/cSsbcuZvO1I?autoplay=1&loop=1&playlist=cSsbcuZvO1I"
							    frameborder="0">
							</iframe> -->
						</div>

						<ul class="list">
							<li>
								<p class="justify">
									<strong class="blue headding">Highly skilled and Diversified Industry Experience Professionals. </strong>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Quick Turnaround Times </strong>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Cost Effective Solutions </strong>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Accurate Results and Detailed Reports </strong>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Greater insight. </strong>
								</p>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</section>

	</div>
@endsection