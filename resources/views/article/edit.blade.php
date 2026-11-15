@extends('layout')
@section('content')
<form action="/article/{{$article->id}}" method="post">
  @csrf
  @method('PUT')
    <div class="form-group">
      <label for="exampleInputPassword1">Дата публикации</label>
      <input name="datePublic" type="date" class="form-control" value="{{$article->datePublic}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Название статьи</label>
    <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{$article->title}}" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Краткое описание</label>
    <input name="shortDesc" type="text" class="form-control" id="exampleInputPassword1"value="{{$article->shortDesc}}">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Описание</label>
    <textarea name="desc" type="text" cols="30" rows="5" class="form-control" id="exampleInputPassword1">{{$article->desc}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection