<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <x-dropdown>
                <x-slot name='trigger'>
                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32">
                        {{isset($currentCategory) ? $currentCategory->name : 'Categories' }}
                    </button>
                </x-slot>

                <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

                @foreach($categories as $category)

                <x-dropdown-item href="/?category={{$category->slug}}" :active="isset($currentCategory) && $currentCategory->is($category)">{{ ucwords($category->name)}}</x-dropdown-item>

                @endforeach
            </x-dropdown>
</div>