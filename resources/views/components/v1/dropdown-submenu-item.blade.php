@props(['subMenuText', 'subItems'])

<div x-data="{ subMenuOpen: false }" class="relative">
    <button @click="subMenuOpen = !subMenuOpen"
        class="flex justify-between relative items-center w-full basic-dropdown-item">
        {{ $subMenuText }}
        <x-gmdi-arrow-forward-ios-o class="w-5 h-5" />
    </button>
    <div x-show="subMenuOpen" @click.away="subMenuOpen = false" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        {{ $attributes->merge(['class' => 'absolute top-0 left-full ml-4 w-full rounded-md shadow-lg bg-[#37414B] ring-1 ring-black ring-opacity-5 px-2 py-2']) }}
        x-cloak >
        {{ $subItems }}
    </div>
</div>