@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="jumbotron">
        <h2>{{$posts->title}}</h2>
        <small>{!!$posts->Details!!}</small>
        <hr>
        <small>Written in {{$posts->created_at}}</small>
    </div>
        <a href="/Post" class="btn btn-default">Go Back</a>
        <a href="/Post/{{$posts->id}}/edit" class="btn btn-default">Edit</a>
    </div>

@endsection