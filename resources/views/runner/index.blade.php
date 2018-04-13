@extends('layouts.base')

@section('title', 'Runners list')

@section('content')
    <div class="row">
      <div class="col-md-6">
      <p><a href="{{ route('runner.create') }}">Add new runner</a></p>
@if (!isset($runners[0]))
        <p class="alert alert-danger">No runners found</p>
@else
@foreach ($runners as $runner)
  <li>
    <p class="lead">{{ $runner->name }} achieved
      @component('result', ['hours' => $runner->hours, 'minutes' => $runner->minutes, 'seconds' => $runner->seconds])
      @endcomponent
      in {{ $runner->distance }}m race
        <a href="{{ Route('runner.edit', ['id' => $runner->id]) }}"> edit</a></p>
  </li>
@endforeach
@endif
      </div>
    </div>
@endsection