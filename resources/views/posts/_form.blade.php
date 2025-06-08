@csrf

<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title ?? '') }}" required>
    @error('title') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="body" class="form-label">Body</label>
    <textarea class="form-control" id="body" name="body" rows="5" required>{{ old('body', $post->body ?? '') }}</textarea>
    @error('body') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="published_at" class="form-label">Published Date</label>
    <input type="date" class="form-control" id="published_at" name="published_at"
    value="{{ old('published_at', isset($post) && $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('Y-m-d') : '') }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
