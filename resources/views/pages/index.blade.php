@extends('layouts.layout')

@section('title', 'Home')

@section('main-content')

    <h1 class='font-xl text-blue-950' >Welcome To My Blog</h1>
    <article>
        <h2><a href='/posts/firstPost'>First Post</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </article>
    <article>
        <h2><a href='/posts/secondPost'>Second Post</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            In vitae turpis massa sed. Auctor eu augue ut lectus arcu. Quis commodo odio aenean sed adipiscing diam donec. 
            Egestas purus viverra accumsan in nisl nisi scelerisque. Diam donec adipiscing tristique risus. 
            Eget nunc lobortis mattis aliquam faucibus purus in massa tempor. In iaculis nunc sed augue lacus viverra vitae. 
            Non curabitur gravida arcu ac tortor. Eu nisl nunc mi ipsum. Urna molestie at elementum eu. Nulla porttitor massa id neque aliquam vestibulum. 
        </p>
    </article>
    <article>
        <h2><a href='/posts/thirdPost'>Third Post</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            In vitae turpis massa sed. Auctor eu augue ut lectus arcu. Quis commodo odio aenean sed adipiscing diam donec. 
            Egestas purus viverra accumsan in nisl nisi scelerisque. Diam donec adipiscing tristique risus. 
            Eget nunc lobortis mattis aliquam faucibus purus in massa tempor. In iaculis nunc sed augue lacus viverra vitae. 
            Non curabitur gravida arcu ac tortor. Eu nisl nunc mi ipsum. Urna molestie at elementum eu. Nulla porttitor massa id neque aliquam vestibulum. 
        </p>
    </article>


    {{ env('TEST')}}
    
@endsection


<!-- <x-alert message="wow" error="this is an error" /> -->
