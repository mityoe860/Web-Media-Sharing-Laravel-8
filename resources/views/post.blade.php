@extends('layout.main')
@section('container')

            <div class="container">

                <div class="row my-3">
                    <div class="col-md-8">
                        <h2> {{ $post["title"] }}</h2>
                        <img src="https://source.unsplash.com/1200x400/?{{ $post->title }}" class="img-fluid" alt="...">
                        <p>Genre :@foreach ($post->genre as $genres)

                        <a href="/animelist?genre={{ $genres->name }}"class="text-decoration-none">{{ $genres->name }}, @endforeach</a></p>
                        <div class="card mt-3">
                            <div class="card-header"><b>Sinposis</b>
                            </div>
                            <div class="card-body">
                                {!! $post->body!!}
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
