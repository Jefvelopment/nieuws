<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
    </div>
    <div>
<select name="category_id" id="category">
@foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
@endforeach
</select>
</div>
    <button type="submit">Create Post</button>