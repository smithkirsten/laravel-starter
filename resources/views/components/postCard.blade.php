<! doctype html>

<article class='bg-white border-white rounded p-6'>
    <h1 class='text-xl'>{{ $post->title }}</h1>
    <p> {{ date("M d, Y", $post->date) }}</p>
    <div>
      {!! $post->body !!} 
    </div>
</article>