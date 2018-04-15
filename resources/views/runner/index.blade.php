@extends('layouts.base')

@section('title', 'Runners list')

@section('content')
<div class="row">
  <div class="col-md-5 offset-1">
    <h1>List of all runners</h1>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-5 offset-1">
    <p>
      <a href="{{ route('runner.create') }}" class="btn btn-success">Add new runner</a>
    </p>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-6">
    @if (!isset($runners[0]))
    <p class="alert alert-danger">No runners found</p>
    @else @foreach ($runners as $runner)
    <p class="lead">{{ $runner->name }} achieved @component('result', ['hours' => $runner->hours, 'minutes' => $runner->minutes, 'seconds'
      => $runner->seconds]) @endcomponent in {{ $runner->distance }}m race
      <a href="{{ Route('runner.edit', ['id' => $runner->id]) }}">
        <span class="align-right">
          <i class="far fa-edit"></i>
        </span>
      </a>
    </p>
    <hr> @endforeach @endif
  </div>
</div>
@endsection