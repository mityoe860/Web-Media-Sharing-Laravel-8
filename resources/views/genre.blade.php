
@extends('layout.main')
@section('container')


<div class="container">



            <h1 class="mb-4">{{ $title }}</h1><div class="container">

@foreach ($genres as $post )


<div class="card mb-3" style="max-width: 750px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://source.unsplash.com/1000x1000/?{{ $post->genre->name }}" class="img-fluid" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><a href="/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>

         <small> <p>Genre : <a href="/genres/{{ $post->genre->slug }}"class="text-decoration-none">{{ $post->genre->name }}</a></small></p>
          <p class="card-text">{{ $post->excerp }}</p>
          <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
        </div>
      </div>
    </div>
  </div>

@endforeach
{{ $genres -> links() }}
</div>


    @endsection
