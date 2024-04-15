
@extends('layouts.layout')

@section('title', 'Home')

@section('main-content')

    @foreach ($posts as $post)
        <article class='w-2/3 border-2 border-blue-900 bg-white p-6'>
            <a href="posts/{{ $post->slug }}" class='underline'><h2 class='text-xl'>{{ $post->title }} ></h2></a>
            <p>{{  date('M d, Y', $post->date) }}</p>
            <div class='italic'>
                {{ $post->excerpt }}...
            </div>
        </article>
    @endforeach



    {{ env('TEST')}}
    
@endsection


<!-- <x-alert message="wow" error="this is an error" /> -->


