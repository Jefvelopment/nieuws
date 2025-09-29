<x-layout>
@foreach($posts as $post)
<article>
    <h1>
        <a href="{{ route('posts.show', $post->id) }}">
            {{$post->title}}
        </a>
    </h1>
    <p>{{$post->content}}</p>
    <div>
        {{$post->category->title}}
    </div>
</article>
<button formaction="{{ route('posts.edit', $post) }}" formmethod="GET">Edit</button>
@endforeach
</x-layout>