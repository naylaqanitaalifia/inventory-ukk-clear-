@extends('layouts.app')

@section('content')

    @if(session('show_password'))
        <div class="mb-4">
            <x-ui.alert
                variant="warning"
                :message="session('show_password')"
            />
        </div>
    @endif
    <x-ui.delete-modal route="operators" />

    <x-common.page-breadcrumb
        pageTitle="Operators"
        label=""
        sublabel=""
    />
    <div class="space-y-6">
        <x-tables.main-table
            addButtonText="Add Operator"
            addButtonRoute="{{ route('admin.operators.create') }}"
        >
            <x-slot:thead>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Name</th>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Email</th>
            </x-slot:thead>

            @forelse ($users as $user)
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
                        <div class="flex ">
                            <form action="{{ route('admin.operator.reset-password', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <button type="submit" class="flex items-center justify-center size-9 rounded-lg transition-colors hover:bg-gray-50 dark:hover:bg-red-500/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw-icon lucide-rotate-ccw text-gray-600 cursor-pointer size-5 dark:text-gray-200 dark:hover:text-gray-600"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
                                </button>
                            </form>
                            <button @click="$dispatch('modal-open', { id: '{{ $user->id }}', name: '{{ $user->name }}' })" class="flex items-center justify-center size-9 rounded-lg text-red-500 transition-colors hover:bg-red-50 dark:hover:bg-red-500/10">
                                <svg class="text-red-500 cursor-pointer size-5 dark:text-gray-400 dark:hover:text-red-500"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100" class="py-3.5 text-center text-sm text-gray-500">
                        No data available
                    </td>
                </tr>
            @endforelse
        </x-tables.main-table>
    </div>
@endsection
