<x-base-layout>
    <h1 class="text-3xl font-bold mb-6">Tags</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($tags as $tag)
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2">
                    <a href="{{ route('tags.show', $tag->id) }}" class="text-blue-600 hover:underline">
                        {{ $tag->name }}
                    </a>
                </h2>
                <p class="text-gray-600">{{ $tag->description }}</p>
            </div>
        @endforeach
    </div>
</x-base-layout>