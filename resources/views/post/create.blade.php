@extends('layouts.base')

@section('title', 'Add an article')
    
@section('content')
    <div class="col-md-8 text-center">
      <h2>Add article</h2>
      <p class="lead">Use the form below to add a new article</p>
    </div>
    {{ Form::open(['url' => 'post/store', 'method' => 'GET']) }}

    <div class="col-md-8">
      <div class="form-group">
        {{ Form::label('author', 'Author', ['class' => 'lead']) }}
        {{ Form::text('author', '', ['class' => 'form-control']) }}
      </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
          {{ Form::label('title', 'Title', ['class' => 'lead']) }}
          {{ Form::text('title', '', ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-8">
      <div class="form-group">
        {{ Form::label('body', 'Content', ['class' => 'lead']) }}
        {{ Form::textarea('body', '', ['class' => 'form-control']) }}
      </div>
    </div>
    <div class="col-md-8">
        {{ Form::submit('Add an article', ['class' => 'btn btn-block btn-outline-success font-weight-bold']) }}
        
        {{ Form::close() }}
    </div>
@endsection