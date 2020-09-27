@extends('_layouts.master')

@section('content')
  <div class="container">
    <h1>Posts</h1>

    @if(count($posts) > 0)
      @foreach($posts as $post)
      <div class="well">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <img src="/storage/cover_image/{{ $post->cover_image }}" style="width: 100%;" />
          </div>

          <div class="col-md-8 col-sm-8">
            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
            <p><small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small></p>
          </div>
        </div>
      </div>
      @endforeach

      {{-- Laravel pagination --}}
      {{ $posts->links() }}
    
    @else
    <p>No Posts found</p>
    @endif
  </div>
@endsection