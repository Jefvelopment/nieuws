<x-base-layout>
    <h1 class="text-3xl font-bold mb-6">{{ $post->title }}</h1>
    <div>
        <h2 class="font-semibold mb-2">Tags:</h2>
        <ul>
            @foreach($post->tags as $tag)
                <li>
                    <a href="{{ route('tags.show', $tag->id) }}" class="text-blue-600 hover:underline">
                        {{ $tag->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    {{-- other post details --}}
</x-base-layout>
