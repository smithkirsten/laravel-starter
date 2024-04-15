@extends('layouts.layout')

@section('title', 'Post')

@section('main-content')
<!-- reads the post in the web.php route and inserts it into the page here -->

  <x-postCard :post="$post" />
  <div class='bg-white text-gray-800 w-full'>
    <h2 class='text-lg text-center'>Comments</h2>
    @foreach ($comments as $comment)
      <x-comment :comment="$comment" />
    @endforeach
  </div>

  <a href='/' class='text-lg font-bold'><-- Go Back</a>
@endsection
