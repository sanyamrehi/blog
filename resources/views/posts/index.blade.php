{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <h1>Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h3><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
                <p>{{ Str::limit($post->body, 150) }}</p>
<small>
    Published at:
    {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d M, Y') : 'Not published' }}
</small>

                <div class="mt-2">
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
{{-- @endsection --}}
