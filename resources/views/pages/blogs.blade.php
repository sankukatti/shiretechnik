@extends('layouts.app')

@section('title', 'Blogs')

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
						<p class="block text justify">
							By : <span class="blue">{{$json['blogs'][$i]['by']}}</span>
						</p>
					</div>
					
				@endfor
			@endif
		</section>
	</div>
@endsection
<style type="text/css">
		.footer-section {
			position: fixed;
			width: 100%;
			bottom: 0;
		}
	</style>