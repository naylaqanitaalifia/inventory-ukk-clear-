@props([
    'icon' => '',
    'title' => '',
    'description' => ''
])

<div class="bg-primary text-primary p-8 rounded-md">
    <div class="flex flex-col items-center justify-center text-center space-y-2">
        <div class="mb-4">{{ $icon }}</div>
        <p class="text-lg font-semibold">{{ $title }}</p>
        <p class="">{{ $description }}</p>
    </div>
</div>