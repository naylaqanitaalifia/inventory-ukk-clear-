@extends('layouts.app');

@section('content')
    <x-common.page-breadcrumb
        pageTitle="Lending"
        label="Lendings"
        label="Lending Detail (Admin)"
    />

    <div class="space-y-6">
        <x-tables.main-table
            backRoute="{{ route('admin.items.index') }}"
            exportButton="{{ false }}"
            showAction="{{ false }}"
        >
            <x-slot:thead>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Item</th>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Total</th>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Name</th>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Notes</th>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Date</th>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Returned</th>
                <th class="px-4 py-3 text-start text-sm font-medium text-gray-500 dark:text-gray-400">Edited By</th>
            </x-slot:thead>

            @foreach ($item->lendingDetails as $detail)
                <tr>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            {{ $item->name ?? '-' }}
                        </div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            {{ $detail->qty ?? 0 }}
                        </div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            {{ $detail->lending->name ?? '-' }}
                        </div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            {{ $detail->lending->notes ?? '-' }}
                        </div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            {{ $detail->created_at->format('d F, Y') }}
                        </div>
                    </td>
                    <td class="px-1 py-1 whitespace-nowrap">
                        @if ($detail->return_date)
                            <div class="px-3 py-1 text-sm font-medium text-center text-green-400 dark:text-white border border-green-400 rounded-full inline-block">
                                {{ $detail->return_date->format('j F, Y') }}
                            </div>
                        @else
                            <div class="px-3 py-1 text-sm font-medium text-center text-amber-400 dark:text-white border border-amber-400 rounded-full inline-block">
                                Not Returned
                            </div>
                        @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            {{ $detail->lending->user->name ?? '-' }}
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-tables.main-table>
    </div>
@endsection
