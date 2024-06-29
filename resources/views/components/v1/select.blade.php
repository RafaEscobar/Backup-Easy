@props([
    'isRequired' => false,
    'name',
    'placeholder',
])

<select name="{{$name}}" class="basic-design" {{ ($isRequired) ? 'required' : null }}>
    <option value="0">{{$placeholder}}</option>
    {{ $slot }}
</select>