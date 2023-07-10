<x-layout>

@include ('posts._header')


        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if($posts->isEmpty())
           
            <button @click="alert('You have no post')" class="bg-red-500">Click to know why you are not seeing anything</button>
           
            @else
            <x-post-featured-card :post="$posts[0]"/>
           @endif

        <div class="lg:grid lg:grid-cols-2">
            @foreach($posts->skip(1) as $post)
            <x-post-card :post="$post"/>
@endforeach           
        </div>
{{$posts->links()}}
         
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