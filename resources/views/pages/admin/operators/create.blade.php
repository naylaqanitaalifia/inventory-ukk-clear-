@extends('layouts.app')

@php
    $roles = [
        'admin' => 'Admin',
        'staff' => 'Staff',
    ]
@endphp

@section('content')
    <x-common.page-breadcrumb
        pageTitle="Add Operator"
    />

    <x-common.component-card>
        <form action="{{ route('admin.operators.store') }}" method="POST" class="space-y-6">
            @csrf

            <x-form.form-elements.input
                label="Name"
                name="name"
                placeholder="Input your full name"
            />

            <x-form.form-elements.input
                label="Email"
                name="email"
                placeholder="Input your email"
            />

            <x-form.form-elements.select-inputs
                label="Role"
                name="role"
                :options="$roles"
            />

            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100 dark:border-gray-800">
                <a href="{{ route('admin.operators.index') }}" class="flex items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-theme-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                    Back
                </a>
                <button type="submit" class="flex items-center justify-center rounded-lg bg-brand-500 px-4 py-2 text-sm font-medium text-white hover:bg-brand-600 transition">
                    Save Staff
                </button>
            </div>
        </form>
    </x-common.component-card>
@endsection
