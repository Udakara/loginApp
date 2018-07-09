@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1> Blog posts</h1>
                        <a href="/Post/create" class="btn btn-primary">create your Post </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
