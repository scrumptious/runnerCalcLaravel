@extends('layouts.base')

@section('title', 'Runners list')

@section('content')

<div class="row">
  <div class="col-md-5 offset-1">
    <h1>Edit runner's info</h1>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-2 offset-2">
    {{ Form::open(['route' => ['runner.update', 'id' => $runner->id], 'method' => 'put']) }}
    @csrf
    <div class="form-group">
      {{ Form::label('name', 'Name', ['class' => 'lead']) }}
      {{ Form::text('name', $runner->name, ['class' => 'form-control', 'required' => 'required']) }}
    </div>
  </div>
  <div class="col-md-1">
    <div class="form-group">
      {{ Form::label('age', 'Age', ['class' => 'lead']) }}
      {{ Form::number('age', $runner->age, ['class' => 'form-control narrow-input', 'required' => 'required', 'min' => 1, 'max' => 120]) }}
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3 offset-2">
    <div class="form-group">
      {{ Form::label('distance', 'Distance', ['class' => 'lead']) }}
      {{ Form::select('distance', [ 'medium' => ['800' => '800m',
      '1000' => '1000m', '1500' => '1500m', '3000' => '3000m', '5000' => '5000m / 5km', '8000' => '5 miles / 8km', '10000'
      => '10 000m / 10km'], 'long' => ['15000' => '15km', '16100' => '10 miles / 16,1km', '21100' => 'half marathon / 21,1km',
      '30000' => '30km', '42200K' => 'marathon / 42,2km'] ], ['class' => 'form-control', 'required' => 'required', 'selected' => $runner->distance]) }}
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-3 offset-2">
    {{ Form::label('result', $runner->name . '\'s result', ['class' => 'lead', 'required' => 'required']) }}
  </div>
</div>
<div class="row">
  <div class="col-md-1 offset-2">
    {{ Form::number('hours', $runner->hours, ['class' => 'form-control narrow-input', 'min' => 0, 'max' =>59, 'required' => 'required'])
    }} {{ Form::label('hours', 'hours') }}
  </div>
  <div class="col-md-1">
    {{ Form::number('minutes', $runner->minutes, ['class' => 'form-control narrow-input', 'min' => 0, 'max' =>59, 'required' => 'required'])
    }} {{ Form::label('minutes', 'minutes') }}
  </div>
  <div class="col-md-1">
    {{ Form::number('seconds', $runner->seconds, ['class' => 'form-control narrow-input', 'min' => 0, 'max' =>59, 'required' => 'required'])
    }} {{ Form::label('seconds', 'seconds') }}
  </div>
</div>
<br>
<hr>
<div class="row">
  <div class="col-md-1 offset-2">
    {{ Form::submit('Save changes', ['class' => 'btn btn-outline-success font-weight-bold']) }}
  </div>
  <div class="col-md-1 offset-1">
    <a href="{{ route('runner.index') }}" class="btn btn-outline-danger"><strong>Cancel</strong></a>
  </div>
  {{ Form::close() }}

  <div class="col-md-1 offset-1 ">
  {{-- {{ Form::open(['route' => ['runner.destroy', 'id' => $runner->id], 'method'=> 'delete']) }}
    @csrf
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
  {{ Form::close() }} --}}
    {{-- <a href="{{ route('runner.destroy', ['id' => $runner->id]) }}" class="btn btn-danger">Delete</a> --}}
  </div>
</div>

@endsection