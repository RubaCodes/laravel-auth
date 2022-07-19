@extends('layouts.app')


@section('content')
<div class="container margin-auto">
    <div class="card">
        <div class="card-header text-uppercase ">Crea nuovo post</div>
        <div class="card-body">
            <form action="{{route('admin.posts.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Titolo del post</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                </div>

                <label for="content">Inserisci il contenuto del post</label>
                <textarea class="form-control" id="content" name="content" rows="7"></textarea>

                <div class="form-group form-check pt-4">
                    <input type="checkbox" name="published" class="form-check-input" id="published">
                    <label class="form-check-label" for="published">Pubblico</label>
                </div>
                <button type="submit" class="btn btn-primary">Crea post</button>
            </form>
        </div>
    </div>
</div>
@endsection