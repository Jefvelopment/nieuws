<div>
<form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}" required>
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required>{{ $post->content }}</textarea>
    </div>
    <div>
<select name="category_id" id="category">
@foreach($categories as $category)
    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
@endforeach
</select>
<button type="submit">Update Post</button>
</div>
