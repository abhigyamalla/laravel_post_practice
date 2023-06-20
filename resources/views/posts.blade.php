@extends('layout')

@section ('content')
@foreach ($posts as $post)
<article class="{{$loop->even ? 'foo' : '' }}">
    <h1>
        <a href="/post/<?=$post->slug;?>">
            
            {{ $post->title }}
        </a>
        <p>
          By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
    </h1>
    <?=$post->excerpt;?>
</article>

@endforeach

@endsection   