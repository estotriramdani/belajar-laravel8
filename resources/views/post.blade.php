@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <h2>{{ $post->title }}</h2>
        <p>By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
      </div>
      <a href="/blog" class="d-block text-decoration-none">Back to Posts</a>
    </div>
  </div>  
@endsection

