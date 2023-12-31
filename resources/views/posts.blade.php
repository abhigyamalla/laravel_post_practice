<x-layout>

@include ('_post-header')


        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <x-post-featured-card :post="$posts[0]"/>
           

        <div class="lg:grid lg:grid-cols-2">
            @foreach($posts->skip(1) as $post)
            <x-post-card :post="$post"/>
@endforeach           
        </div>

         
        </main> 


</x-layout>

 



<!-- @foreach ($posts as $post)
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

@endforeach -->