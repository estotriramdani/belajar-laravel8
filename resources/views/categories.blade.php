@extends('layouts.main')
@section('container')
  <h2 class="mb-5">Post Categories</h2>
  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4">
          <div class="card bg-dark text-white p-0">
            <img src="https://source.unsplash.com/330x300?{{ $category->slug }}" class="card-img" al="{{ $category->name }}">
            <div class="card-img-overlay d-flex justify-content-center align-items-center flex-fill" style="background-color: rgba(0, 0, 0, 0.7)">
              <h5 class="card-title"><a class="text-white text-decoration-none" href="/blog?category={{ $category->slug }}">{{ $category->name }}</a></h5>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  
@endsection