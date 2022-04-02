@extends('layout.main')

@section('container')
    <h1 class="mt-5">Penulis</h1>
        @foreach ($penulis as $p)
            <ul>
                <li>
                    <h2><a href="/post/penulis/{{ $p->username }}">{{ $p->name }}</a></h2>
                </li>
            </ul>
        @endforeach
@endsection

