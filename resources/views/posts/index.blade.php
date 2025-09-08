@foreach($posts as $post)
<article>
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <div>
    {{$post->category->title}}
</div>
</article>

@endforeach