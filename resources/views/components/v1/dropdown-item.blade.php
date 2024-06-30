@props(['itemText', 'itemRoute' => 'dashboard'])

<a href="{{ route($itemRoute) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">{{ $itemText }}</a>