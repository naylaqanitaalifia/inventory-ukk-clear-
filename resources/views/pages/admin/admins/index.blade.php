@extends('layouts.app')

@section('content')
    <x-ui.delete-modal route="admins" />

    <x-common.page-breadcrumb
        pageTitle="Admins"
        label="admin"
        sublabel="admin"
    />

    <div class="space-y-6">
        <x-tables.main-table
            addButtonText="Add Admin"
            addButtonRoute="{{ route('admin.admins.create') }}"
        >
            <x-slot:thead>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Name</th>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Email</th>
            </x-slot:thead>

            @foreach ($users as $user)
                <tr>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            {{ $user->name ?? '-' }}
                        </div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            {{ $user->email ?? '-' }}
                        </div>
                    </td>
                    <td class="px-4 sm:px-6 py-3.5">
                        <div class="flex">
                            <a href="{{ route('admin.admins.edit', $user) }}" class="flex items-center justify-center size-9 rounded-lg text-red-500 transition-colors hover:bg-gray-50 dark:hover:bg-red-500/10">
                                <svg class="text-gray-600 cursor-pointer size-5 dark:text-gray-200 dark:hover:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>

                            {{-- <button @click="$dispatch('modal-open', { id: '{{ $student->id }}', name: '{{ $student->user->name }}' })" class="flex items-center justify-center size-9 rounded-lg text-red-500 transition-colors hover:bg-red-50 dark:hover:bg-red-500/10"> --}}
                            <button @click="$dispatch('modal-open', { id: '{{ $user->id }}', name: '{{ $user->namel }}' })" class="flex items-center justify-center size-9 rounded-lg text-red-500 transition-colors hover:bg-red-50 dark:hover:bg-red-500/10">
                                <svg class="text-red-500 cursor-pointer size-5 dark:text-gray-400 dark:hover:text-red-500"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-tables.main-table>
    </div>
@endsection
