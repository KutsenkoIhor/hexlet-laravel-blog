@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{route('articles') . '/' . $article->id}}">{{$article->name}}</a></h2>
        <h2><a href="{{route('articles') . '/' . $article->id . '/edit'}}">{{'Edit - ' . $article->name}}</a></h2>
        <a href="{{route('articles') . '/' . $article->id}}"
           data-method="delete"
           rel="nofollow"
           data-confirm="Are you sure?">Delete</a>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection

@section('url')
    {{route('articles')}}
@endsection
