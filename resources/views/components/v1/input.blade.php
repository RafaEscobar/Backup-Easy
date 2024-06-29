@props(['type' => 'text', 'name'])

<input type="{{$type}}" name="{{$name}}" placeholder="Ingresa tu nombre" {{ $attributes->merge(['class' => 'bg-[#37414B] text-white px-4 py-2 rounded-lg w-full font-light']) }}>