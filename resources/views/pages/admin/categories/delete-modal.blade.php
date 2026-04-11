<x-ui.modal>
    <div class="flex flex-col">
        <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-red-100 dark:bg-red-500/20">
            <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>

        <div class="mb-8 text-center">
            <h5 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">
                Are you sure you want to delete this?
            </h5>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                This action cannot be undone. All data will be permanently removed.
            </p>
        </div>

        <form :action="`/categories/${itemId}`" method="POST" class="flex flex-col gap-3 sm:flex-row-reverse sm:justify-center">
            @csrf
            @method('DELETE')

            <button type="submit"
                class="flex w-full justify-center rounded-lg bg-red-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-700 sm:w-auto">
                Yes, delete it
            </button>

            <button type="button"
                @click="open = false"
                class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-6 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50 sm:w-auto dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700">
                Cancel
            </button>
        </form>
    </div>
</x-ui.modal>
