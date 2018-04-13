@extends('layouts.base')

@section('title', 'Runners list')

@section('content')
    <div class="row">
      <div class="col-md-6">
    {{-- {{ var_dump($runner) }} --}}
{{ Form::open(['route' => ['runner.update', 'id' => $runner->id], 'method' => 'put']) }}
{{-- {{ Form::open(['url'=>'foo/bar','method'=>'put']) }} --}}
<div class="form-group">
  {{ Form::label('name', 'Name', ['class' => 'lead']) }}
  {{ Form::text('name', $runner->name, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('distance', 'Distance', ['class' => 'lead']) }}
  {{ Form::number('distance', $runner->distance, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{-- {{ Form::label('', '', ['class' => 'lead']) }} --}}
  {{ Form::number('hours', $runner->hours, ['class' => 'form-control']) }}
{{-- </div>
<div class="form-group"> --}}
  {{-- {{ Form::label('', '', ['class' => 'lead']) }} --}}
  {{ Form::number('minutes', $runner->minutes, ['class' => 'form-control']) }}
{{-- </div>
<div class="form-group"> --}}
  {{-- {{ Form::label('', '', ['class' => 'lead']) }} --}}
  {{ Form::number('seconds', $runner->seconds, ['class' => 'form-control']) }}
</div>
{{ Form::submit('Save changes', ['class' => 'btn btn-primary']) }}
{{ Form::submit('Discard', ['formmethod' => 'get', 'formaction' => route('runner.index'), 'class' => 'btn btn-danger']) }}
{{-- <a href="{{ route('runner.index') }}" class="btn btn-danger">Discard</a> --}}
{{ Form::close() }}


  <li>
    <p><a href="{{ route('runner.index') }}">See all runners</a></p>
  </li>
      </div>
    </div>
@endsection