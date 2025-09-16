<x-base-layout>
@foreach($posts as $post)
<article>
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <div>
    {{$post->category->title}}
</div>
</article>
<button formaction="{{ route('posts.edit', $post) }}" formmethod="GET">Edit</button>
@endforeach
</x-base-layout>