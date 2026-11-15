@extends('layout')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
<form action="/auth/signIn" method="post">
  @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Почта</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите почту" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
@endsection