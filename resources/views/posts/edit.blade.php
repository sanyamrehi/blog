{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @method('PUT')
        @include('posts._form')
    </form>
</div>
{{-- @endsection --}}
