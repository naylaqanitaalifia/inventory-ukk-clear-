@extends('layouts.fullscreen-layout')

@section('content')
<div>
    {{-- Hero --}}
    <div class="relative overflow-hidden w-full h-[300px] md:h-[500px]">
        <img src="{{ asset('images/wikrama-school.jpg') }}" alt="" class="absolute w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-secondary space-y-4 px-4 text-center">
            <h1 class="max-w-lg text-2xl md:text-5xl font-semibold">Inventory Management of Wikrama Vocational High School</h1>
            <p class=" text-sm md:text-lg text-center pb-4">Management of incoming and outgoing items at Wikrama Vocational High School</p>
            <x-ui.button link="{{ route('login.form') }}" />
        </div>
    </div>

    {{-- Ruang Lingkup --}}
    <div class="text-primary px-6 py-12 md:px-16 md:py-20">
        <div class="text-center space-y-2 mb-8 md:mb-12">
            <h2 id="ruang-lingkup" class="text-2xl md:text-4xl font-semibold">Our System Flow</h2>
            <p class="text-base md:text-lg">Our inventory system workflow</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <x-ui.cards.solution-card image="https://placehold.co/600x400" title="Items Data" description="Meja rusak, kursi patah, AC/Kipas mati, atau papan tulis rusak." />
            <x-ui.cards.solution-card image="https://placehold.co/600x400" title="Management Technician" description="Proyektor tidak menyala, koneksi internet kelas, atau PC Laboratorium." />
            <x-ui.cards.solution-card image="https://placehold.co/600x400" title="Managed Lending" description="Toilet mampet, atap bocor, lampu selasar padam, atau fasilitas olahraga." />
            <x-ui.cards.solution-card image="https://placehold.co/600x400" title="All Can Borrow" description="Toilet mampet, atap bocor, lampu selasar padam, atau fasilitas olahraga." />
        </div>
    </div>

    {{-- Inventory Service Standards --}}
    <div class="bg-tertiary text-primary px-6 py-12 md:px-16 md:py-20">
        <div class="text-center space-y-2 mb-8 md:mb-12">
            <h2 class="text-2xl md:text-4xl font-semibold">Inventory Service Standards</h2>
            <p class="text-base md:text-lg">Ensuring efficient coordination between staff and administrators in managing inventory.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <x-ui.cards.service-card title="Accurate Data Management" description="Admins maintain and update inventory data to ensure accuracy and reliability." />
            <x-ui.cards.service-card title="Request Handling" description="Staff can submit item requests or borrowing, which are reviewed and approved by admins." />
            <x-ui.cards.service-card title="Routine Monitoring" description="Admins perform regular checks to ensure item availability and condition." />
            <x-ui.cards.service-card title="Clear Status Tracking" description="Admins perform regular checks to ensure item availability and condition." />
        </div>
    </div>

    {{-- How it Works --}}
    <div class="text-primary px-6 py-12 md:px-16 md:py-20">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div class="max-w-md space-y-6 md:space-y-8">
                <h2 class="text-2xl md:text-4xl font-semibold">How the System Works</h2>
                {{-- <x-ui.button text="Lapor Sekarang" bgClass="bg-secondary" textClass="text-secondary" iconBgClass="bg-primary" iconTextClass="text-primary" /> --}}
            </div>
            <div class="w-full md:max-w-xl text-base md:text-lg">
                <ol class="list-decimal list-inside">
                    <li class="border-b border-[#ffe8d9] py-3 tracking-wider">Staff browse available inventory items.</li>
                    <li class="border-b border-[#ffe8d9] py-3 tracking-wider">Staff submit a borrowing or request form.</li>
                    <li class="border-b border-[#ffe8d9] py-3 tracking-wider">Admin reviews and approves or rejects the request.</li>
                    <li class="py-3 tracking-wider">Staff track the status and return items based on the schedule.</li>
                </ol>
            </div>
        </div>
    </div>

    {{-- CTA --}}
    <div class="bg-tertiary text-secondary px-6 py-12 md:px-16 md:py-20">
        <div class="bg-secondary rounded-lg overflow-hidden p-6 md:pl-6 md:py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-lg space-y-6 md:space-y-8">
                    <h2 class="text-2xl md:text-4xl font-semibold leading-tight">Simplify inventory management for staff and administrators</h2>
                    <x-ui.button link="{{ route('login.form') }}"/>
                </div>
                <div class="flex gap-4 md:translate-x-12 overflow-hidden">
                    <img src="https://placehold.co/600x400" alt="Placeholder" class="w-28 md:w-44 h-40 md:h-56 object-cover rounded-sm" />
                    <img src="https://placehold.co/600x400" alt="Placeholder" class="w-28 md:w-44 h-40 md:h-56 object-cover rounded-md" />
                    <img src="https://placehold.co/600x400" alt="Placeholder" class="w-28 md:w-44 h-40 md:h-56 object-cover rounded-md hidden sm:block" />
                </div>
            </div>
        </div>
    </div>

    <x-ui.footer />
</div>
@endsection
