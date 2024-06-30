@props(['openBtn'])

<div x-data="{ open: false }" class="relative inline-block text-left">
  <span @click="open = !open">
    {{ $openBtn }}
  </span>
  <div
    x-show="open" @click.away="open = false"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    {{ $attributes->merge(['class' => 'origin-top-left absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 px-2 py-2']) }}>
      {{ $slot }}
  </div>
</div>