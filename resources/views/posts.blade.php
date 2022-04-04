@extends('layout.main')

@section('container')
    <h1 class="mt-5 mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts">

          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif

          @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

    @if ($posts->count()) 
    {{-- membuat count agar yang muncul index 0 --}}
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3> 
          <p>
            <small class="text-muted">  
            By: <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }} 
            </small> 
            {{-- diffForHumans library carbonn --}}
          </p>  
          
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/posts/{{ $posts[0]->slug }}">Read more..</a>
        </div>
    </div>
    
    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
            {{-- Memunculkan posts dan melewati no 1 dengan method skip --}}
            <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                      <p>By: <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>  
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <p class="text-center fs-4">No Post Found</p>
    @endif

    {{ $posts->links() }}
@endsection


