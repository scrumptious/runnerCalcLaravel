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
      {{-- @if (Session('message'))
        {{ Session('message') }}
        @endif --}}
    <a href="{{ route('runner.create') }}" class="btn btn-outline-success"><strong>Add new runner</strong></a>
  </div>
</div>
@if (!isset($runners[0]))
<p class="alert alert-danger">No runners found</p>
@else

@foreach ($runners as $runner)
<hr>
<div class="row">
  <div class="col-md-6">
    {{ Form::open(['route' => ['runner.destroy', 'id' => $runner->id], 'method'=> 'delete', 'class' => 'form-inline']) }}
    @csrf
    <p class="lead mt-0 mb-0">{{ $runner->name }} (aged {{ $runner->age }}) achieved @component('result', ['hours' => $runner->hours, 'minutes' => $runner->minutes,
        'seconds' => $runner->seconds]) @endcomponent in {{ $runner->distance }}m race
    </p>
  </div>
  <div class="col-md-2">
      <a href="{{ Route('runner.edit', ['id' => $runner->id]) }}" class="btn btn-outline-info btn-sm far fa-edit"> edit</a>
      {{ Form::button(' delete', ['class' => 'btn btn-outline-danger btn-sm far fa-trash-alt', 'type' => 'submit']) }}
    {{ Form::close() }}
  </div>
</div>
@endforeach 

@endif
</div>
@endsection