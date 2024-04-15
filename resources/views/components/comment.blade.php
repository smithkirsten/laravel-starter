<! doctype html>

<article class='bg-white border-white rounded p-6'>
    <h1 class='text-xl'>{{ $comment->username }}</h1>
    <p> {{ date("M d, Y", $comment->date) }}</p>
    <div>
      {!! $comment->body !!} 
    </div>
</article>