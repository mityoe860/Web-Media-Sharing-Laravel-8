
@extends('layout.main')
@section('container')


<div class="container">
            <h1 class="mb-4">{{ $title }}</h1><div class="container">
                @if($posts->count())
@foreach ($posts as $post )
<div class="card mb-3" style="max-width: 750px;">
    <div class="row g-0">
      <div class="col-md-4">



        <img src="https://source.unsplash.com/1000x1000/?{{ $post->title }}" class="img-fluid" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><a  href="/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>

          <p class="card-text">{{ $post->excerp }}</p>
          <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
        </div>
      </div>
    </div>
  </div>

@endforeach @else
<center><h1>No post found!</h1></center>
@endif

</div>

{{ $posts->links() }}
    @endsection
