@extends('layout.main')

@section('container')
    <h1 class="mt-5">Penulis</h1>

    <div class="container">
        <div class="row">
            @foreach ($penulis as $p)
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400?{{ $p->name }}" class="card-img" alt="{{ $p->name }}">
                    <div class="card-img-overlay">
                      <h5 class="card-title"><a href="/post/penulis/{{ $p->username }}">{{ $p->name }}</a></h5>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

