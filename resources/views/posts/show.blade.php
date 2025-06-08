{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p><small>Published at: {{ $post->published_at ? $post->published_at->format('d M, Y') : 'Not published' }}</small></p>
    <div>
        {!! nl2br(e($post->body)) !!}
    </div>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back to Posts</a>
</div>
{{-- @endsection --}}
