@props(['route' => '#', 'target' => '_self'])

<a href="{{$route}}" {{ $attributes->merge(['class' => "bg-[#37414B] px-4 py-2 rounded-lg w-full block text-center"]) }} target="{{$target}}">
    {{$slot}}
</a>