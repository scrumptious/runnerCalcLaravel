@extends('layouts.base')

@section('title', 'Runners list')

@section('content')
    <div class="row">
      <div class="col-md-6">
@if (!isset($runner))
        <p class="alert alert-danger">No runner found with id of {{ $id }}</p>
@else
  <li>
    {{-- {{ var_dump($runner) }} --}}
    <p class="lead">{{ $runner->name }} achieved
      @component('result', ['hours' => $runner->hours, 'minutes' => $runner->minutes, 'seconds' => $runner->seconds])
      @endcomponent
      in {{ $runner->distance }}m race</p>
  </li>
@endif
  <li>
    <p><a href="{{ route('runner.index') }}">See all runners</a></p>
  </li>
      </div>
    </div>
@endsection