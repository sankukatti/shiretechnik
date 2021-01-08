@extends('layouts.app')

@section('title', 'Careers')

@section('content')
	<section class="career-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="sub-title-text bold blue">
						Looking forward to a successful career?
					</p>

					<p class="block bold">
						Our passion towards engineering services and pursuit of excellence in engineering has created a unique identity in our industry! If you have the same passion and dreaming of shaping your ideas to reality, apply for a suitable position. Shiretechnik gives you a range of opportunities for career growth.
					</p>
				</div>
			</div>

			<div class="row current-opportunities">
				<div class="col-sm-12">
					<p class="block blue">
						Current Opportunities at Shiretechnik:
					</p>
					@if( count($json['openings']) <= 0)
						<p class="block blue">
							(Currently we do not have job openings, please visit for future opportunities.)
						</p>
					@else


						<ol class="block list">
						@for ($i = 0; $i < count($json['openings']); $i++)
							<li class="text">
								{{$json['openings'][$i]['designation']}}
							</li>
						@endfor
						</ol>
					@endif
				</div>



				<div class="col-sm-4 career-form">
					<form role="form" method="post" enctype="multipart/form-data" action="">
						<div class="form-group">
							<div class="form-group">
								<label class="sr-only" for="email">Full name</label>
		    					<input type="text" name="name" placeholder="Full name" class="form-control" id="email" required>
							</div>

							<div class="form-group">
								<label class="sr-only" for="email">Email address:</label>
		    					<input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
							</div>

							<div class="form-group">
								<label class="" for="email">Attach your CV</label>
		    					<input type="file" name="resume" class="form-control" value="Attach your CV" accept=".doc,.pdf,.docx,.txt" required>
							</div>

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" class="btn btn-default background-blue white">Submit</button>

						</div>
					</form>
				</div>

			</div>
		</div>
	</section>
@endsection
