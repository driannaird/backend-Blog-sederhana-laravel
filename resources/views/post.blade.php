@extends('layout.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5 mt-5">
            <h3>{{ $post->title }}</h3>
            <p>By: <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                @if ($post->image)
                      <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" style="max-height: 300px">
                @endif  
            
            <article class="my-3">
                {!! $post->body !!}
            </article>


            <a href="/posts">Kembali ke halaman posts</a>
        </div>
    </div>
</div>
@endsection