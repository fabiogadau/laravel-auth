@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Blog archive</h1>

    @foreach ($posts as $post)
    <article>
       <h2>{{ $post->title }}</h2>
       <p>{{ $post->body }}</p>
    </article>
    @if (!$loop->last)
    <hr>
    @endif
    @endforeach

    <div class="mt-5 d-flex justify-content-center">
      {{ $posts->links() }}
    </div>
</div>
@endsection