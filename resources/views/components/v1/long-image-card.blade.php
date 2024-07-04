@props(['imgUrl', 'message', 'btn'])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center rounded-b-2xl rounded-t-xl bg-[#37414B]']) }}>
    <img src="{{ $imgUrl }}" alt="" class="rounded-2xl w-full h-[92%] object-cover" />
    <div class="flex justify-between items-center px-8 py-3 text-white w-full">
        <div>
            <span class="text-xl font-semibold">{{ $message }}</span>
        </div>
        <div>
            {{ $btn }}
        </div>
    </div>
</div>