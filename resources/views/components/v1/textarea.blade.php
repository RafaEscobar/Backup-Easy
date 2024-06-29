@props([
    'isRequired' => false,
    'name',
    'rows',
    'placeholder'
])

<textarea name="{{$name}}" rows="{{$rows}}"
    {{ $attributes->merge(['class' => 'bg-[#37414B] text-white px-4 py-2 rounded-lg w-full font-medium']) }}
    placeholder="{{$placeholder}}"
    {{ ($isRequired) ? 'required' : null }}
    ></textarea>