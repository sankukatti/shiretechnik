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
							Why <span class="capital">shire technik</span>?
						</p>	

						<div class="image-div">
							<img src="images/tank-levels-infrared.jpg">
						</div>

						<ul class="list">
							<li>
								<p class="justify">
									<strong class="blue headding">Trusted Partner: </strong>
									<span>SHIRETECHNIK aligns with clients’ goals, and helps them to get insight to improve their product efficiency and reliability.  As a trusted partner, we shoulder our clients to achieve on the best designing and engineering of their products, not on simulation software.</span>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Experienced </strong>
									<span>SHIRETECHNIK’s workforce is highly experienced and talented with a wide range of industry backgrounds. Our core team is rich in experience of about two decades on engineering industries, and has outstanding capabilities on development CFD code, thermal product development and first time right methodologies. </span>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Innovation </strong>
									<span>Innovation is a part of our vision! Our innovative ideas and solutions helped our clients to accomplish their challenging requirements, and to develop the best design in the world market.</span>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Flexible </strong>
									<span>SHIRETECHNIK is extremely flexible and efficient. We have worked on a large range of designs and have the skills to help you achieve your requirements. We can help you with all your simulation needs.</span>
								</p>
							</li>

							<li>
								<p class="justify">
									<strong class="blue headding">Value Addition </strong>
									<span>We provide great care to your projects at no additional cost. You receive highly professional and trusted advice, support and expertise.</span>
								</p>
							</li>
						</ul>
					</div>

					<div class="col-sm-6">
						<p class="headding blue bold">
							Why <span class="capital">cfd</span> with <span class="capital">shire technik</span>?
						</p>	

						<div class="video-div">
							<video autoplay loop>
								<source src="videos/TotalSim.mp4" type="video/mp4" />
								Your browser does not support the video tag.
							</video>
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