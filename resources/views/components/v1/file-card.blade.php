@props(['leftIcon', 'rightIcon', 'fileName', 'updateDate'])

<div class="flex justify-between items-center w-full px-6 py-2">
    <div class="flex items-center gap-6">
        <div>{{$leftIcon}}</div>
        <div class="flex flex-col">
            <span>{{$fileName}}</span>
            <span>{{$updateDate}}</span>
        </div>
    </div>
    <div>{{$rightIcon}}</div>
</div>