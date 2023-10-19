@extends('layouts.layout')

@section('title', 'Home')

@section('main-content')

    <h1>Welcome</h1>
    {{ env('TEST')}}
    <x-alert message="wow" error="this is an error" />

@endsection
