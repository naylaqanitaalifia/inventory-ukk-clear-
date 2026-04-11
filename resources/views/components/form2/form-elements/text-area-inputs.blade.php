@props([
    'label' => null,
    'name',
    'value' => '',
    'placeholder' => '',
    'autocomplete' => 'off',
    'state' => 'default',
    'message' => null,
])

@php
    $inputValue = old($name, $value);

    $hasError = $errors->has($name);
    if ($hasError) {
        $state = 'error';
        $message = $errors->first($name);
    }

    $stateClasses = [
        'default' => 'border-gray-300 focus:border-brand-300 focus:ring-brand-500/10 dark:border-gray-700 dark:focus:border-brand-800',
        'error'   => 'border-error-300 focus:border-error-300 focus:ring-error-500/10 dark:border-error-700 dark:focus:border-error-800',
        'success' => 'border-success-300 focus:border-success-300 focus:ring-success-500/10 dark:border-success-700 dark:focus:border-success-800',
    ];

    $currentClass = $stateClasses[$state] ?? $stateClasses['default'];
@endphp

<div class="flex flex-col gap-1.5">
    <label class="" for="{{ $name }}">
        {{ $label }}
    </label>

    <div class="relative">
        <textarea
            id="{{ $name }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            rows="6"
            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border bg-transparent px-4 py-2.5 text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 {{ $currentClass }} dark:placeholder:text-white/30">{{ old($name, $value) }}</textarea>

    </div>
</div>
