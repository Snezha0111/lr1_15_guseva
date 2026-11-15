@extends('layout')
@section('content')
<div class="card" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$article->shortDesc}}</h6>
    <p class="card-text">{{$article->desc}}</p>
    <a href="/article/{{$article->id}}/edit" class="btn btn-link">Редактировать</a>
    <form action="/article/{{$article->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-link">Удалить</button>
    </form>
  </div>
</div>
@endsection