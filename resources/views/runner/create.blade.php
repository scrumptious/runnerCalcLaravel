@extends('layouts.base')

@section('title', 'Runners list')

@section('content')
    <div class="row">
      <div class="col-md-4">
    {{-- {{ var_dump($runner) }} --}}
{{ Form::open(['route' => 'runner.store', 'method' => 'post']) }}
{{-- {{ Form::open(['url'=>'foo/bar','method'=>'put']) }} --}}
<div class="form-group">
  {{ Form::label('name', 'Name', ['class' => 'lead']) }}
  {{ Form::text('name', '', ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('distance', 'Distance', ['class' => 'lead']) }}
  {{ Form::number('distance', '', ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('hours', 'hours', ['class' => 'lead']) }}
  {{ Form::number('hours', '', ['class' => 'form-control']) }}
{{-- </div>
<div class="form-group"> --}}
  {{ Form::label('minutes', 'minutes', ['class' => 'lead']) }}
  {{ Form::number('minutes', '', ['class' => 'form-control']) }}
{{-- </div>
<div class="form-group"> --}}
  {{ Form::label('seconds', 'seconds', ['class' => 'lead']) }}
  {{ Form::number('seconds', '', ['class' => 'form-control']) }}
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