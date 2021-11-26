@extends('layouts.guest')

@section('pageContent')
	<div class="row">
	<div class="col-md-8 blog-main">

		@foreach ($posts as $post)
		<div class="blog-post">
		<h2 class="blog-post-title"><a href="{{route("single.post", $post["slug"])}}">{{$post['title']}}</a></h2>
		<p class="blog-post-meta">{{$post->created_at->diffForHumans()}} <a href="#">ZarZuKeT</a></p>
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
		</div><!-- /.blog-post -->
		@endforeach

		<nav class="blog-pagination">
		<a class="btn btn-outline-primary" href="#">Older</a>
		<a class="btn btn-outline-secondary disabled" href="#">Newer</a>
		</nav>

	</div><!-- /.blog-main -->

	<aside class="col-md-4 blog-sidebar">
		<div class="p-3 mb-3 bg-light rounded">
		<h4 class="font-italic">About</h4>
		<p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		</div>

		<div class="p-3">
		<h4 class="font-italic">Archives</h4>
		<ol class="list-unstyled mb-0">
			<li><a href="#">March 2014</a></li>
			<li><a href="#">February 2014</a></li>
			<li><a href="#">January 2014</a></li>
		</ol>
		</div>

		<div class="p-3">
		<h4 class="font-italic">Elsewhere</h4>
		<ol class="list-unstyled">
			<li><a href="#">GitHub</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
		</ol>
		</div>
	</aside><!-- /.blog-sidebar -->

	</div><!-- /.row -->
@endsection