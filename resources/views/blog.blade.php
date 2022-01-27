@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 mt-3"></div>
            <h1 style="color: blueviolet">My Blog</h1>
            @foreach ($blog as $p)
                <article>
                    <h2>{{ $p["title"] }}</h2>
                    <h5>by: {{ $p["penulis"] }}</h5>
                    <p>
                        {{ $p["konten"] }}
                        <a href="/read/{{ $p["title_lain"] }}">Read more..</a>
                    </p>
                </article>
            @endforeach
        </div>
    </div>
@endsection