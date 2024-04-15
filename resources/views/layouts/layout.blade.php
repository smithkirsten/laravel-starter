@extends('layouts.app')
@section('content')



<body>
    <h1 class='my-6 text-3xl text-center text-blue-950' >Welcome To My Blog</h1>
    <nav class='my-10 p-6 h-20 text-lg font-bold bg-white flex items-center'>
        <ul class='flex justify-between w-full'>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contribute">Contribute</a></li>
        </ul>
    </nav>

    <main>
        <div class='flex flex-col gap-4 items-center w-full p-10'>
            @yield('main-content')
        </div>
    </main>
</body>

@endsection
