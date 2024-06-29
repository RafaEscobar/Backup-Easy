@props([
    'type' => 'text',
    'iconIsVisible' => false,
    'isRequired' => false,
    'name',
    'placeholder',
    'icon',
])

<div class="relative">
    <input type="{{$type}}" name="{{$name}}"
    {{ $attributes->merge(['class' => 'basic-design foc']) }}
    placeholder="{{$placeholder}}"
    {{ ($isRequired) ? 'required' : null }}>
    @if ($iconIsVisible)
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            {{ $icon }}
        </div>
    @endif
</div>