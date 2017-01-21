@extends('layouts.app')

@section('title', 'Temp')

@section('content')
	<div class="container">
		<section class="blog-list">
			
			@if( count($json['blogs']) <= 0) 
				<p class="title-text bold blue title-spacing">
					No blogs.
				</p>
			@else
				@for ($i = 0; $i < count($json['blogs']); $i++)
					<div class="blog">
						<p class="title-text bold blue title-spacing">
							<a href="/forum/{{$json['blogs'][$i]['urlKey']}}">{{$json['blogs'][$i]['title']}}</a>
						</p>
						<p class="block text justify">
							{{$json['blogs'][$i]['text']}}
						</p>
					</div>
					
				@endfor
			@endif
		</section>
	</div>
@endsection