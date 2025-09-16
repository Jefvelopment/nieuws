<x-base-layout>
    <h1 class="text-3xl font-bold mb-6">Posts with tag: {{ $tag->name }}</h1>
    <ul>
        @foreach($tag->posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 hover:underline">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
</x-base-layout>
