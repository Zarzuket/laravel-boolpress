@extends('layouts.guest')

@section('pageContent')
	<div class="row">
	<div class="col-md-8 blog-main">
		<h1 class="blog-post-title">{{$post['title']}}</h1>
		<p class="blog-post-meta">{{$post->created_at->diffForHumans()}} <a href="#">Jacob</a></p>
		<p>
			{{$post['content']}}
		</p>
		<h4>
			@if (count($post->tags) > 0)
				Tags:
				@foreach ($post->tags as $tag)
					<span class="badge bg-success">{{$tag->name}}</span>
				@endforeach
			@endif
		</h4>  
	</div><!-- /.blog-main -->
@endsection