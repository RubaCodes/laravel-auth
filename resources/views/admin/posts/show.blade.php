@extends('layouts.app')


@section('content')
<div class="container margin-auto">
    <div class="card">
        <div class="card-header text-uppercase ">
            <h1>titolo del post:</h1>
            <h2>{{$post->title}}</h2>
        </div>
        <div class="card-body">
            <div>
                <h2>Contenuto del post</h2>
                {{$post->content}}
            </div>
            <div class="py-4">
                <h2>Stato pubblicazione:</h2>
                {{$post->published ? "Il post e' stato pubblicato" : "Il post non e' stato ancora pubblicato"}}
                il giorno: {{$post->created_at}}
            </div>
        </div>

    </div>
</div>
@endsection