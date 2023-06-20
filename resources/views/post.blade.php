@extends('layout')

@section('content')
<article>
    <h1>
    <?= $post->title?> 
    <p>
          By <a href="/user/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>

    </h1>      
    {!!$post->body!!}
    </article>
    <a href="/">Go BACK</a>
  
@endsection