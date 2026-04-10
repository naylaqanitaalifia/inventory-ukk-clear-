@props([
    'text' => 'Get Started',
    'bgClass' => 'bg-primary',
    'textClass' => 'text-primary',
    'iconBgClass' => 'bg-secondary',
    'iconTextClass' => 'text-secondary',
    'link' => '#',
])

<a href="{{ $link }}" {{ $attributes->merge(['class' => "group inline-flex items-center gap-4 pl-6 pr-2 py-2 $bgClass rounded-full transition-all duration-300 hover:scale-105 active:scale-95"]) }}>
    <span class="font-semibold {{ $textClass }}">{{ $text }}</span>
    <div class="flex items-center justify-center {{ $iconBgClass }} {{ $iconTextClass }} w-8 h-8 rounded-full transition-all duration-300 group-hover:scale-110">
        <svg 
            xmlns="http://www.w3.org" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="2.5" 
            stroke="currentColor" 
            class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"
            >
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
        </svg>
    </div>
</a>