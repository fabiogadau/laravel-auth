@extends('layouts.admin')

@section('content')
<div class="container">
   <h1 class="mb-4 text-center">{{ $post->title }}</h1>

   <table class="table">
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
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
            <td>
               <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
            </td>
            <td>
               {{-- Placeholder --}}
               <a class="btn btn-danger" href="{{ route('admin.posts.destroy', $post->id) }}">Delete</a>
            </td>
         </tr>
      </tbody>
   </table>
</div>
@endsection