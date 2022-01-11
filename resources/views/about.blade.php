@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 mt-3"></div>
            <article>
                <h1>About me</h1>
                <br>
                <h5 style="color: red">Nama : {{ $nama }}</h5>
                <p>
                    <h5>Guru : {{ $guru }}</h5>
                </p>
            </article>
        </div> 
    </div>
@endsection