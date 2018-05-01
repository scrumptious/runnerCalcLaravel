@extends('layouts.base')

@section('title', 'Running articles')
    
@section('content')
    <h2>Running articles</h2>
    <p class="lead">Here you can browse all of the running articles that has been added since the website has been created.</p>
    <div class="col-md-6">
      <a href="{{ Route('post.create') }}" class="btn btn-block btn-outline-success font-weight-bold">Add an Article</a>
    </div>
@endsection