@props([
    'title',
    'type' => 'text',
    'label',
    'note' => '',
    'name',
    'value' => '',
    'placeholder' => '',
    'message'
])

<div class="flex flex-col gap-1.5">
    <label for="{{ $name }}" class="flex items-center gap-2">
        {{ $label }}
        {{-- opsional --}}
            <span class="text-sm font-light text-amber-500">{{ $note }}</span>

    </label>

    <input
        type="{{ $type }}"
        {{-- id="{{ $name }}" --}}
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        class="border border-gray-300 rounded-md p-3 placeholder:text-gray-400 placeholder:font-light focus:ring-brand-500 focus:border-brand-500 focus:outline-brand-500"
    >
</div>
