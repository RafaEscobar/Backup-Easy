@props(['route' => '#', 'target' => '_self'])

<a href="{{$route}}" {{ $attributes->merge(['class' => "basic-design block text-center"]) }} target="{{$target}}">
    {{$slot}}
</a>