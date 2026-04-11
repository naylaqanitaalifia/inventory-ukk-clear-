@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb
        pageTitle="Add Item"
        
    />

    <x-common.component-card>
        <form action="{{ route('admin.items.store') }}" method="POST" class="space-y-6">
            @csrf

            {{-- Item Name --}}
            <x-form.form-elements.input
                label="Item Name"
                name="name"
                placeholder="Enter item name"
            />

            {{-- Category --}}
            <x-form.form-elements.select-inputs
                label="Category"
                name="category_id"
                :options="$categories"
                id_field="id"
                label_field="name"
            />

            {{-- Total --}}
            <x-form.form-elements.input
                label="Total"
                name="total"
                type="number"
                placeholder="Enter total item count"
            />

            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100 dark:border-gray-800">
                <a href="{{ route('admin.items.index') }}" class="flex items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-theme-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                    Cancel
                </a>
                <button type="submit" class="flex items-center justify-center rounded-lg bg-brand-500 px-4 py-2 text-sm font-medium text-white hover:bg-brand-600 transition">
                    Save Item
                </button>
            </div>
        </form>
    </x-common.component-card>
@endsection
