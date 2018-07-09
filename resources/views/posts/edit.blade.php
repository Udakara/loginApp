@extends('layouts.app')

@section('content')
    <h1> Edit Post</h1>
    <div class="container">
    {!! Form::open(['action' => ['PostController@update',$posts->id],'method' => 'POST']) !!}
        <div class='form-group'>
        {{Form::label('title','Title')}}
        {{Form::text('title',$posts->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class='form-group'>
                {{Form::label('body','Body')}}
                {{Form::textarea('body',$posts->Details,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Post Body'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection
