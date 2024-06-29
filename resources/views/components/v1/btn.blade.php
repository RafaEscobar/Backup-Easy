@props(['type' => 'submit'])

<button type="{{$type}}" {{ $attributes->merge(['class' => "bg-[#37414B] px-4 py-2 rounded-lg w-full"]) }}>
    {{$slot}}
</button>