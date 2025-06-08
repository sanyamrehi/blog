{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <h1>Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @include('posts._form')
    </form>
</div>
{{-- @endsection --}}
