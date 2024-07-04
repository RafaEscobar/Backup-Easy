@props(['albumName', 'albumUpdate', 'imageUrl', 'albumImgCount' => 0])

<div class="w-64 relative">
    <img src="{{$imageUrl}}"
        alt="" class="w-64 rounded-xl">
    <div class="flex flex-col mt-4 px-1">
        <span class="text-lg font-semibold">{{$albumName}}</span>
        <span class="text-base font-light">{{$albumImgCount}} imagenes</span>
        <span class="text-base font-light">Actualizado el {{$albumUpdate}}</span>
    </div>
    <span class="absolute top-0 right-3 cursor-pointer">
        <x-ionicon-ellipsis-horizontal-sharp class="w-8 h-8 text-white" />
    </span>
</div>