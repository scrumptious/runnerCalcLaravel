@extends('layouts.base')

@section('title', 'Contact us')

@section('content')
{{-- if form yet to be submitted --}}
@if (!isset($runner['name']))
  <div class="row">
    {!! Form::open(['url' => url()->current(), 'method' => 'GET']) !!}
      <div class="form-group">
        {{ Form::label('name', 'Name', ['class' => 'lead']) }}
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'] )}}
      </div>
      <div class="form-group">
        {{ Form::label('subject', 'Subject', ['class' => 'lead']) }}
        {{ Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'about?']) }}
      </div>
      <div class="form-group">
        {{ Form::label('email', 'Your e-mail address', ['class' => 'lead']) }}
        {{ Form::email('email', '', ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('message', 'Message', ['class' => 'lead']) }}
        {{ Form::textarea('message', '', ['class' => 'form-control']) }}
      </div>

      <div>
        {{ Form::submit('Send message', ['class' => 'btn btn-primary'])}}
      </div>
    {!! Form::close() !!}
  </div>

  @else
  {{-- handling a form --}}
    <div class="row">
        <div class="col-md-2"><strong>Name</strong></div>
        <div class="col-md-2"><strong>Subject</strong></div>
        <div class="col-md-2"><strong>E-mail</strong></div>
        <div class="col-md-2"><strong>Message</strong></div>
    </div>
    <div class="row">
        <div class="col-md-2">{{ $runner['name'] }}</div>
        <div class="col-md-2">{{ $runner['subject'] }}</div>
        <div class="col-md-2">{{ $runner['email'] }}</div>
        <div class="col-md-2">{{ $runner['message'] }}</div>
      </div>
    </div>

  @endif

  @endsection