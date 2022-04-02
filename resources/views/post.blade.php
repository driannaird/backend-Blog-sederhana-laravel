@extends('layout.main')

@section('container')
    <h1 class="mt-5">Ini halaman single posts</h1>
    <article class="mt-5 mb-2">
            <h3>{{ $post->title }}</h3>
            <p>By: <a href="/post/penulis/{{ $post->user->name }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
            
        <a href="/posts">Kembali ke halaman posts</a>
    </article>
@endsection