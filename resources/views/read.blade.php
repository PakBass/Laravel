@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <article>
                    <h2>{{ $post['title'] }}</h2>
                    <h5>{{ $post['penulis'] }}</h5>
                    <p>{{ $post['konten'] }}</p>
                </article>
                <a href="/blog">Back to blog</a>
            </div>
        </div>
    </div>
@endsection