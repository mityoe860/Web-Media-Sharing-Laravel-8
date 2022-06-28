@extends('dashboard.layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Posting</h1>
  </div>
  <div class="col-lg-8">

    <form method="post" action="/dashboard/posts/{{ $post->slug }}">
      @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Judul</label>
          <input type="text" class="form-control @error('title') is-invalid
          @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}"> @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>


            <label for="slug" class="form-label"></label>
            <input type="hidden" class="form-control" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">

            <label for="genre" class="form-label">Genre</label>

            @foreach ($genres as $genre )
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$genre->id }}" name="genre_id[]" >
                <label for="genre" class="form-check-label">
                  {{ $genre->name }}
                </label>
              </div> @endforeach

              <div class="mt-3">
                <label for="body" class="form-label">Body</label>

                <input id="body" value ="{{ old('body', $post->body)}}" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
                @error('body')
                <p class="text-danger">{{ $message }}</p>

                @enderror
              </div>

            </div> <button type="submit" class="btn btn-primary mt-3">Edit Post</button>
    </form>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/post/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.addEventListener();
    })
</script>

@endsection
