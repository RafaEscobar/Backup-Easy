@props([
    'isRequired' => false,
    'name',
    'rows',
    'placeholder'
])

<textarea name="{{$name}}" rows="{{$rows}}"
    {{ $attributes->merge(['class' => 'basic-design']) }}
    placeholder="{{$placeholder}}"
    {{ ($isRequired) ? 'required' : null }}
    ></textarea>