@extends('layouts.admin')

@section('content')
<div class="container">
   <h1 class="mb-4 text-center">Blog archive</h1>

   @if (session('post-deleted'))
   <div class="alert alert-success">
      <p>Post deleted succesfully:</p>
      {{ session('post-deleted') }}
   </div>
   @endif

   <table class="table">
      <thead>
         <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th colspan="3"></th>
         </tr>
      </thead>
      <tbody>
      @foreach ($posts as $post)
      <tr>
         <td>{{ $post->id }}</td>
         <td>{{ $post->title }}</td>
         <td>{{ $post->created_at->format('d/m/Y') }}</td>
         <td>{{ $post->updated_at->diffForHumans() }}</td>
         <td>
            <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id) }}">Show</a>
         </td>
         <td>
            <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
         </td>
         <td>
            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
               @csrf
               @method('DELETE')
               <input class="btn btn-danger" type="submit" value="Delete">
            </form>
         </td>
      </tr>
      @endforeach
      </tbody>
   </table>

   <div class="mt-5 d-flex justify-content-center">
      {{ $posts->links() }}
   </div>
</div>
@endsection