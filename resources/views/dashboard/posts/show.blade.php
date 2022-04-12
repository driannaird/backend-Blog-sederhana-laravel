@extends('dashboard.layout.main')

@section('container')
<div class="container">
    <div class="row ">
        <div class="col-lg-8 my-3">
            <h3>{{ $post->title }}</h3>
            <a href="/dashboard/posts" class="btn btn-success">Back to my post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus')"><i class="bi bi-x-circle"></i>Hapus</button>
            </form>

            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            
            <article class="my-3">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection