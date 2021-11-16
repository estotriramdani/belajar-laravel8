@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-4">
    <div class="col-md-8">
      <h2>{{ $post->title }}</h2>
      <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
      <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
      <a href="" class="btn btn-danger"><span data-feather="edit"></span> Delete</a>
      <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
    </div>
  </div>
</div>  
@endsection