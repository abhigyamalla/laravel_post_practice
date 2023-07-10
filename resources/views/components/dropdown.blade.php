@props(['trigger'])

<div x-data="{ show:false }" @click.away="show=false">
    <div @click="show= !show">
        {{$trigger}}
    </div>

    <div x-show="show" class="absolute w-full">
        {{$slot}}
    </div>
</div>