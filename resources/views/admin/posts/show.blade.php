@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>{{$post->id}}</h1>
                    @if ($post->category)     
                        <h3>{{$post->category->name}}</h3>
                    @endif 
                    <h4>
                        @if (count($post->tags) > 0)
                            Tags:
                            @foreach ($post->tags as $tag)
                                <span class="badge bg-success">{{$tag->name}}</span>
                            @endforeach
                        @endif
                    </h4>              
                    <p>{{$post->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
