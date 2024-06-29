@props([
    'type' => 'text',
    'iconIsVisible' => false,
    'isRequired' => false,
    'name',
    'placeholder',
    'icon',
])

<div class="relative">
    <input type="{{$type}}" name="{{$name}}" {{ $attributes->merge(['class' => 'bg-[#37414B] text-white px-4 py-2 rounded-lg w-full font-medium']) }} placeholder="{{$placeholder}}" {{ ($isRequired) ? 'required' : null }}>
    @if ($iconIsVisible)
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            {{ $icon }}
        </div>
    @endif
</div>