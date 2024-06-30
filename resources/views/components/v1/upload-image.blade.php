@props(['isImage', 'label'])

<div class="flex flex-col md:flex-row justify-center items-center md:gap-10">
    @if ($isImage)
        <div class="flex flex-col items-center">
            <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg" alt="" class="rounded-2xl w-48">
            <span class="mt-2">{{$label}}</span>
        </div>
    @else
        <div class="flex flex-col items-center">
            <span class="w-12 h-12">
                <x-gmdi-file-present-s class="w-12 h-12" />
            </span>
            <span class="mt-2">{{$label}}</span>
        </div>
    @endif
    <div>
        <label class="text-white flex w-64 cursor-pointer flex-col items-center rounded-2xl justify-center  px-4 py-6 tracking-wide  group ">
            <x-gmdi-cloud-upload-r class="w-8 h-8 group-hover:text-blue-300" />
            <span class="mt-2 group-hover:text-blue-300">Cargar imagen</span>
            <input type="file" class="hidden" />
        </label>
    </div>
</div>