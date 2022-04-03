@extends('layout.main')

@section('container')
    <h1 class="mt-5">Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay">
                      <h5 class="card-title"><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h5>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

