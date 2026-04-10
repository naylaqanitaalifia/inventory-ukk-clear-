@props(['label', 'count', 'color' => 'blue', 'icon'])

@php
    $colors = [
        'blue'   => 'bg-blue-50 dark:bg-blue-500/10 text-blue-500',
        'orange' => 'bg-orange-50 dark:bg-orange-500/10 text-orange-500',
        'green'  => 'bg-green-50 dark:bg-green-500/10 text-green-500',
    ];

    $activeColor = $colors[$color] ?? $colors['blue'];
@endphp

<div class="group bg-white dark:bg-gray-900 p-8 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-xs hover:shadow-2xl hover:shadow-brand-500/10 transition-all duration-500 flex items-center gap-6">
    <div class="p-4 {{ $activeColor }} rounded-2xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="{{$icon}}"/>
        </svg>
    </div>
    <div>
        <p class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-1">{{$label}}</p>
        <h3 class="text-3xl font-bold text-gray-900 dark:text-white">{{$count}}</h3>
    </div>
</div>
