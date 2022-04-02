@extends('layout.main')

@section('container')
    <h1 class="mt-5">{{ $title }}</h1>
    @foreach ($posts as $post)
    <article class="mt-5 mb-5 border-bottom pb-4">
            <h3><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>

            <p>By: <a href="/post/penulis/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>            
            <p>{{ $post->excerpt }}</p>
            <a href="posts/{{ $post->slug }}">Read more...</a>
        </article>
    @endforeach
@endsection


