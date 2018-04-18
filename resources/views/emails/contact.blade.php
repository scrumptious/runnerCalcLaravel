@extends('layouts.base')

@section('title', 'Message sent')
    
@endsection

@section('content')
    <h2>{{ $enquiry['subject'] }}</h2>
    <h3>from: {{ $name }} (<u>{{ $email }}</u>)</h3>
    <p>
        {{ $message }}
    </p>

@endsection