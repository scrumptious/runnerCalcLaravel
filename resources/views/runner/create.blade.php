@extends('layouts.base')

@section('title', 'Runners list')

@section('content')
<div class="row">
  <div class="col-md-6 offset-1">
    <h1>What was your best result?</h1>
    <hr>
  </div>
</div>
<div class="row"> {{--row ending in wrong place --}}
  <div class="col-md-3 offset-2">
    {{-- {{ var_dump($runner) }} --}} {{ Form::open(['route' => 'runner.store', 'method' => 'post']) }} {{-- {{ Form::open(['url'=>'foo/bar','method'=>'put'])
    }} --}}
    <div class="form-group">
      {{ Form::label('name', 'Name', ['class' => 'lead']) }} {{ Form::text('name', '', ['class' => 'form-control', 'required' => 'required']) }}
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3 offset-2">
    <div class="form-group">
      {{ Form::label('distance', 'Distance', ['class' => 'lead']) }}
      {{ Form::select('distance', [ 'medium' => ['800' => '800m', '1000' => '1000m', '1500' => '1500m', '3000' => '3000m',
      '5000' => '5000m / 5km', '8000' => '5 miles / 8km', '10000' => '10 000m / 10km'], 'long' => ['15000' => '15km',
      '16100' => '10 miles / 16,1km', '21100' => 'half marathon / 21,1km', '30000' => '30km', '42200K' => 'marathon / 42,2km'] ],
      ['class' => 'form-control', 'required' => 'required']) }}
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-3 offset-2">
    {{ Form::label('result', 'Your result', ['class' => 'lead', 'required' => 'required']) }}
  </div>
</div>
<div class="row">
  <div class="col-md-1 offset-2">
    {{ Form::number('hours', '', ['class' => 'form-control narrow-input', 'min' => 0, 'max' =>59, 'required' => 'required']) }} {{ Form::label('hours',
    'hours') }}
  </div>
  <div class="col-md-1">
    {{ Form::number('minutes', '', ['class' => 'form-control narrow-input', 'min' => 0, 'max' =>59, 'required' => 'required']) }} {{ Form::label('minutes',
    'minutes') }}
  </div>
  <div class="col-md-1">
    {{ Form::number('seconds', '', ['class' => 'form-control narrow-input', 'min' => 0, 'max' =>59, 'required' => 'required']) }} {{ Form::label('seconds',
    'seconds') }}
  </div>
</div>
<br><hr>
<div class="row">
  <div class="col-md-1 offset-2">
    {{ Form::submit('Save changes', ['class' => 'btn btn-success']) }}
  </div>
  <div class="col-md-1 offset-1">
    <a href="{{ route('runner.index') }}" class="btn btn-danger">Discard</a>
  </div>
  {{ Form::close() }}
</div>

@endsection