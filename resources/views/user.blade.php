@extends('layout.main')

@section('container')
    <h1 class="mt-5">Penulis: {{ $user }}</h1>
    <article class="mt-5 mb-2">
        @foreach ($posts as $post)
            <h3><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
        @endforeach
    </article>
@endsection

