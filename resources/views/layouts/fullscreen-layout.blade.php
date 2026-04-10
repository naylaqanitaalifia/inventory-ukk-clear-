<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Dashboard' }} | WKInventory</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
</head>

<body class="bg-primary min-h-screen">
    {{-- <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6"> --}}
        <div class="fixed bottom-4 right-4 z-50 w-80">
            {{-- Success Message --}}
            {{-- opsional --}}
                <div class="mb-4">
                    <x-ui.alert
                        variant="success"
                        :message="session('success')"
                    />
                </div>
            {{-- opsional --}}

            {{-- Error Message --}}
            {{-- opsional --}}
                <div class="mb-4">
                    <x-ui.alert
                        variant="error"
                        :message="session('error')"
                    />
                </div>
            {{-- opsional --}}
        </div>
        @yield('content')
    {{-- </div> --}}

</body>

@stack('scripts')

</html>
