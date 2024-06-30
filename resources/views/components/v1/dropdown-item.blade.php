@props(['itemText', 'itemRoute' => 'dashboard'])

<a href="{{ route($itemRoute) }}" {{ $attributes->merge(['class' => 'block basic-dropdown-item']) }}>{{ $itemText }}</a>