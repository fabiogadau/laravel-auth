@extends('layouts.admin')

@section('content')
<div class="container">
   <h1 class="mb-4 text-center">{{ $post->title }}</h1>

   <table class="table mb-5">
      <thead>
         <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
            <th colspan="3"></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>{{ $post->created_at->format('d/m/Y') }}</td>
            <td>{{ $post->updated_at->diffForHumans() }}</td>
            <td>
               <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
            </td>
            <td>
               <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger" type="submit" value="Delete post">
               </form>
            </td>
         </tr>
      </tbody>
   </table>

   <div class="d-flex flex-column align-items-center">
      <h3 class="mb-y text-center">Post image</h3>
      @if (!empty($post->path_img))
         <div class="post-img">
            <img src="{{ asset('storage/' . $post->path_img) }}" alt="{{ $post->title }}">
         </div>
      @else
         <p>No image for this post</p>
      @endif
   </div>
</div>
@endsection
