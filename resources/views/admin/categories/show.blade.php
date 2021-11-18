@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h3>{{$category->name}}</h3>
                    <p>{{$category->slug}}</p>
                    <ul>
                        @forelse ($category["posts"] as $post)
                        <li>{{ $post->title }}</li>
                        @empty
                            <p>Non ci sono post associati</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
