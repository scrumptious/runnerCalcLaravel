@extends('layouts.base')

@section('title', 'Welcome')

@section('jumbo')
    @include('include.jumbo')
@endsection

@section('content')
    <p class="lead">database connection test</p>
    @if (isset($runners))
        @foreach ($runners as $runner)
            <p>{{ $runner->name}} is {{ $runner->age }} today.
                Best result so far is {{ $runner->hours }}:{{ $runner->minutes }}:{{ $runner->seconds }} on a {{ $runner->distance }} distance!</p>
        @endforeach
    @endif
@endsection