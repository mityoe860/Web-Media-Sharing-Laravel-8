@extends('dashboard.layout.main')

@section('container')
<div class="container">

    <div class="row my-3">
        <div class="col-md-8">
            <h2> {{ $post["title"] }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span> Hapus</button>
                    </form>
            <img src="https://source.unsplash.com/1200x400/?{{ $post->title }}" class="img-fluid mt-3" alt="...">

            <div class="card mt-3">
                <div class="card-header"><b>Sinposis</b>
                </div>
                <div class="card-body">
                    {!! $post->body !!}
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                  <b>Anime Detail</b>
                </div>
                <div class="card-body">



                </div>
              </div>

        </div>
    </div>
</div>
@endsection
