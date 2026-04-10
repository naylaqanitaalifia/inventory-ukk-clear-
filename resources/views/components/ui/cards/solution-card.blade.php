@props([
    'image' => '',
    'title' => '',
    'description' => '',
])

<div class="group relative w-full h-[300px] overflow-hidden rounded-md cursor-pointer">
    <img src="{{ $image }}" alt="{{ $title }}" class="absolute inset-0 w-full h-full object-cover transtition-transform duration-500 group-hover:scale-110 group-hover:opacity-50">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-trasnparent"></div>

    <div class="absolute inset-0 flex flex-col justify-end p-6 text-secondary">
        <h3 class="text-lg font-semibold transition-all duration-300 transform group-hover:-translate-y-2">{{ $title }}</h3>
        <div class="max-h-40 opacity-100 md:max-h-0 md:opacity-0 overflow-hidden transition-all duration-500 ease-in-out group-hover:max-h-40 group-hover:opacity-100">
            <p class="text-sm">{{ $description }}</p>
        </div>
    </div>
</div>
