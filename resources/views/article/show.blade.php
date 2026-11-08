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
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article['datePublic']}}</th>
                <td>{{$article['title']}}</td>
                <td>{{$article['shortDesc']}}</td>
                <td>{{$article['desc']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection