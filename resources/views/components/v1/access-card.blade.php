@props(['username', 'password', 'rightIcon', 'id'])

<div class="flex justify-between px-5 py-4 rounded-2xl bg-[#37414B] text-white">
    <div class="flex flex-col gap-3">
        <span class="text-xl font-semibold">{{$username}}</span>
        <div class="flex items-center gap-4">
            <span id="pass-{{$id}}">{{$password}}</span>
            <span hidden id="hidden-{{$id}}">
                <x-fluentui-eye-off-16 class="w-6 h-6" />
            </span>
            <span id="show-{{$id}}">
                <x-fluentui-eye-24 class="w-6 h-6" />
            </span>
        </div>
    </div>
    <div class="">
        {{$rightIcon}}
    </div>
</div>