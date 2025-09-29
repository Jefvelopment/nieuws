<x-base-layout>
    <h1 class="text-3xl font-bold mb-6">Posts with tag: {{ $tag->name }}</h1>
    <ul>
        @forelse($tag->posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 hover:underline">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>No posts found for this tag.</li>
        @endforelse 
    </ul>
</x-base-layout>
