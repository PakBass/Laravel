@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <article>
                    <h2>{{ $blog['title'] }}</h2>
                    <h5>{{ $blog['penulis'] }}</h5>
                    <p>{{ $blog['konten'] }}</p>
                </article>
                <a href="/blog">Back to blog</a>
            </div>
        </div>
    </div>
@endsection