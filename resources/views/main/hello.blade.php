@extends('layout')
@section('content')
    <h2>Привет! Ты видишь мой первый проект на Laravel</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Дата</th>
                <th scope="col">Имя</th>
                <th scope="col">Краткое описание</th>
                <th scope="col">Описание</th>
                <th scope="col">Изображение</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article['date']}}</th>
                <td>{{$article['name']}}</td>
                <td>{{$article['shortDesc']}}</td>
                <td>{{$article['desc']}}</td>
                <td><a href="/gallery/{{$article['full_image']}}"><img class="img_table" src="{{URL::asset('/images/'.$article['preview_image'])}}" alt="Изображение статьи"></td></a>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection