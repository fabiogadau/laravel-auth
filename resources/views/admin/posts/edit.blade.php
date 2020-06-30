@extends('layouts.admin')

@section('content')
<div class="container">
   <h1 class="mb-4 text-center">Edit post</h1>

   @if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif

   <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method("PATCH")

      <div class="form-group">
         <label for="title">Title</label>
         <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
      </div>
      <div class="form-group">
         <label for="body">Body</label>
         <textarea class="form-control" name="body" id="body">{{ old('body', $post->body) }}</textarea>
      </div>
      <div class="form-group">
         <label for="path_img">Image</label>
         @isset($post->path_img)
            <div class="post-img w-25 mb-3">
               <img class="mw-100" src="{{ asset('storage/' . $post->path_img) }}" alt="{{ $post->title }}">
            </div>
            <h6>Change image</h6>
         @endisset
         <input class="form-control" type="file" name="path_img" id="path_img" accept="image/*">
      </div>

      <input class="btn btn-success" type="submit" value="Edit post">
   </form>
</div>
@endsection
