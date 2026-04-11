@props([
    'label',
    'name',
    'placeholder' => 'Select option',
    'options' => [],
    'value' => '',
])

<div class="flex flex-col gap-1.5">
    <label for="{{ $name }}" class="">
        {{ $label }}
    </label>

    <select
        {{-- id="{{ $name }}" --}}
        name="{{ $name }}"
        class="border border-gray-300 rounded-md p-3 focus:outline-brand-500"
    >
        <option value="" disabled {{ old($name, $value)  ? '' : 'selected'  }} >{{ $placeholder }}</option>

            <option value="{{ $key }}" {{ old($name, $value) == $key ? 'selected' : '' }}>
                {{ $option }}
            </option>
    </select>

    @error($name)
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
