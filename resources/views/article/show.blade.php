@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
@endsection

@section('url')
    {{route('articles')}}
@endsection
