@extends('layouts.app')

@section('title', $json['title'])

@section('content')

	<div class="page">
		
		<section class="imformation-text {{$json['class']}}">

			<div class="container">
				@for ($i = 0; $i < count($json['order']); $i++)	
					@if ( $json['order'][$i] == 'title' ) 

						<div class="row">
							<div class="col-sm-12">
								<p class="title-text bold blue title-spacing">
									{{$json['title']}}
								</p>

								<p class="block text justify">
									{{$json['text']}}
								</p>
							</div>
						</div>

					@elseif ( $json['order'][$i] == 'images' ) 
						
						@if ( count( $images ) > 0 )
							<section class="images">
								<!-- <div class="container"> -->
									<div class="row">
										<div class="col-sm-12">
											<!-- Image title top -->
											@if( isset( $json['imageTitle']['top'] ) ) 
												<p class="block text bold justify  top-image-title">{{$json['imageTitle']['top']}}</p>
											@endif

											<ul class="images-list">
												<li class="image">
													@if( isset( $images[0] ) ) 
														<img src="{{$images[0]}}">
													@endif
												</li>
												<li class="image no-tab">
													@if( isset( $images[1] ) ) 
														<img src="{{$images[1]}}">
													@endif
												</li>
												<li class="image no-tab no-mobile">
													@if( isset( $images[2] ) ) 
														<img src="{{$images[2]}}">
													@endif
												</li>
											</ul>

											@if( isset( $json['imageTitle']['bottom'] ) ) 
												<p class="block text bold justify bottom-image-title">{{$json['imageTitle']['bottom']}}</p>
											@endif
										</div>
									</div>
								<!-- </div> -->
							</section>
						@endif
					@endif

				@endfor
				
				<div class="row">
					<div class="col-sm-12">

						@for ($i = 0; $i < count($json['sub_sections']); $i++)
							@for ( $j = 0; $j < count( $json['sub_sections'][$i]['order']); $j++)

								@if ( $json['sub_sections'][$i]['order'][$j] == 'title' ) 
									
									<p class="sub-title-text bold blue title-spacing">
										{{ $json['sub_sections'][$i]['title'] }}
									</p>	

								@elseif ( $json['sub_sections'][$i]['order'][$j] == 'subtitle' ) 
									
									<p class="headding bold blue title-spacing">
										{{ $json['sub_sections'][$i]['subtitle'] }}
									</p>								

								@elseif ( $json['sub_sections'][$i]['order'][$j] == 'text1' )
									
									<p class="block text justify">
										{{ $json['sub_sections'][$i]['text1'] }}
									</p>

								@elseif ( $json['sub_sections'][$i]['order'][$j] == 'list' )

									<ul class="block list">
										
										@for ( $k = 0; $k < count( $json['sub_sections'][$i]['list'] ); $k++ )
											<li class="text">
												{{ $json['sub_sections'][$i]['list'][$k] }}
											</li>
										@endfor
										
									</ul>

								@elseif ( $json['sub_sections'][$i]['order'][$j] == 'imgList' )

									<ul class="block image-list">
										
										@for ( $k = 0; $k < count( $json['sub_sections'][$i]['list'] ); $k++ )
											<li class="image">
												<img src="/images/{{ $json['sub_sections'][$i]['list'][$k]['img'] }}">
												<p class="text">
													{{ $json['sub_sections'][$i]['list'][$k]['imgTitle'] }}
												</p>
											</li>
										@endfor
										
									</ul>	

								@elseif ( $json['sub_sections'][$i]['order'][$j] == 'text2' )
									
									<p class="block text justify">
										{{ $json['sub_sections'][$i]['text2'] }}
									</p>

								@elseif ( $json['sub_sections'][$i]['order'][$j] == 'simpleTitle' )
									
									<p class="block text bold justify">
										{{ $json['sub_sections'][$i]['simpleTitle'] }}
									</p>

								@elseif ( $json['sub_sections'][$i]['order'][$j] == 'imgTitle' )
									
									<p class="block text justify imgTitle">
										{{ $json['sub_sections'][$i]['imgTitle'] }}
									</p>

								@elseif ( $json['sub_sections'][$i]['order'][$j] == 'image' )
									
									<img class="subSectionImage" src="/images/{{$json['sub_sections'][$i]['image']}}" />

								@elseif ( $json['sub_sections'][$i]['order'][$j] == 'product' )
									
									<div class="row product">
										<div class="col-sm-4">
											<img class="productimage" src="/images/{{$json['sub_sections'][$i]['product']['image']}}">
										</div>
										<div class="col-sm-8">

											@if ( isset( $json['sub_sections'][$i]['product']['list'] )) 
												
												<ul class="block list">
											
													@for ( $k = 0; $k < count( $json['sub_sections'][$i]['product']['list'] ); $k++ )
														<li class="text">
															{{ $json['sub_sections'][$i]['product']['list'][$k] }}
														</li>
													@endfor
													
												</ul>

											@elseif (isset( $json['sub_sections'][$i]['product']['text'] ))
												<p class="block text justify">
													{{ $json['sub_sections'][$i]['product']['text'] }}
												</p>
											@endif
										</div>
									</div>

								@endif

							@endfor
						@endfor
						<!-- <ul class="block list">
							<li class="text">
								Design and optimization of internal and external airflows for aerodynamic performance and to improve passenger comfort
							</li>
							<li class="text">
								Vibro-acoustics simulation to ensure satellite launch survival and to improve noise comfort of passenger airplanes
							</li>
							<li class="text">
								Manufacturing simulation of high performance composites-based parts to help lower fuel consumption and increase vehicle performance
							</li>
						</ul>	

						<p class="block text justify">
							The following companies have put their trust in ESI's solutions: ADA, Airbus, Applied Materials, AVIC, USAF Research Lab, Alenia, BAE Systems, Bell Helicopter, Boeing, Bridport Aviation, Chengdu Aircraft, Dassault Aviation, DGA, DCNS, DLR, EADS, Embraer, Eurocopter, ESA-Estec, General Dynamics, Howmet, IAF, JAXA, JPL, KARI, Lockheed Martin, Naval Surface & Naval Undersea Warfare Center, NASA, Parker, Raytheon, Rolls Royce, Safran, Thales, United Technologies, US Navy, Vikram Sarabhai Space Centre…
						</p>

						<p class="block text justify">
							ESI customers in Aeronautics and Aerospace sectors face the challenge of designing ever more sophisticated aircraft and spacecraft while controlling cost and time. The effective use of realistic simulation is a requirement for success.
						</p> -->
					</div>
				</div>
				@if ( isset( $json['contact'] ) )
					<p class="block text justify contactUs">
						{{$json['contact']}}
						<a href="/contact">Contact us</a>
					</p>
				@endif
			</div>
		</section>
	</div>
@endsection