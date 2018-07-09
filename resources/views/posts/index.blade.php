@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Posts</h1>
    </div>
    @if(count($Posts)>0)
    <div class="container">
        @foreach($Posts as $pos)
                <div class="jumbotron">
                <h3><a href="/Post/{{$pos->id}}">{{$pos -> title}}</a></h3>
                    <small>{!!$pos -> Details!!}</small>
                    <hr>
                    <small>Written in{{$pos -> created_at}}</small>
                </div>   
        @endforeach
    </div>
    @else
                <P>No Posts found</P>
    

    @endif
@endsection