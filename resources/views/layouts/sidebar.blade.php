<aside id="sidebar"
    class="fixed flex flex-col mt-0 top-0 px-5 left-0 bg-white dark:bg-gray-900 dark:border-gray-800 text-gray-900 h-screen transition-all duration-300 ease-in-out z-[99999] border-r border-gray-200 w-[290px]">

    <!-- Logo -->
    <div class="pt-8 pb-7 flex justify-start">
        <a href="/" class="text-3xl font-bold text-brand-500">WKInventory</a>
    </div>

    <!-- Navigation -->
    <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar">
        <nav class="mb-6">
            <div class="flex flex-col gap-4">

                {{-- Group: Menu --}}
                <div>
                    <h2 class="mb-4 text-xs uppercase flex leading-[20px] text-gray-400 justify-start">
                        <span>Menu</span>
                    </h2>
                    <ul class="flex flex-col gap-1">

                        {{-- Dashboard --}}
                        <li>
                            <a href="/dashboard"
                               class="menu-item group justify-start">
                               {{-- class="menu-item group justify-start {{ request()->is('dashboard*') ? 'menu-item-active' : 'menu-item-inactive' }}"> --}}
                                <span class="{{ request()->is('dashboard*') ? 'menu-item-icon-active' : 'menu-item-icon-inactive' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                </span>
                                <span class="menu-item-text">Dashboard</span>
                            </a>
                        </li>

                    </ul>
                </div>

                {{-- Group: Items Data --}}
                <div>
                    <h2 class="mb-4 text-xs uppercase flex leading-[20px] text-gray-400 justify-start">
                        <span>Items Data</span>
                    </h2>
                    <ul class="flex flex-col gap-1">

                        {{-- Categories --}}
                        <li>
                            <a href="/categories"
                               class="menu-item group justify-start {{ request()->is('categories*') ? 'menu-item-active' : 'menu-item-inactive' }}">
                                <span class="{{ request()->is('categories*') ? 'menu-item-icon-active' : 'menu-item-icon-inactive' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                                    </svg>
                                </span>
                                <span class="menu-item-text">Categories</span>
                            </a>
                        </li>

                        {{-- Items --}}
                        <li>
                            <a href="/items"
                               class="menu-item group justify-start {{ request()->is('items*') ? 'menu-item-active' : 'menu-item-inactive' }}">
                                <span class="{{ request()->is('items*') ? 'menu-item-icon-active' : 'menu-item-icon-inactive' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10"/>
                                    </svg>
                                </span>
                                <span class="menu-item-text">Items</span>
                            </a>
                        </li>

                        {{-- Lending --}}
                        <li>
                            <a href="/lendings"
                               class="menu-item group justify-start {{ request()->is('lendings*') ? 'menu-item-active' : 'menu-item-inactive' }}">
                                <span class="{{ request()->is('lendings*') ? 'menu-item-icon-active' : 'menu-item-icon-inactive' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                                    </svg>
                                </span>
                                <span class="menu-item-text">Lending</span>
                            </a>
                        </li>

                    </ul>
                </div>

                {{-- Group: Accounts --}}
                <div>
                    <h2 class="mb-4 text-xs uppercase flex leading-[20px] text-gray-400 justify-start">
                        <span>Accounts</span>
                    </h2>
                    <ul class="flex flex-col gap-1">

                        {{-- Users (dengan dropdown Admin & Staff) --}}
                        @php
                            $usersActive = request()->is('users*');
                        @endphp
                        <li>
                            <span class="menu-item group w-full xl:justify-start {{ $usersActive ? 'menu-item-active' : 'menu-item-inactive' }}">
                                <span class="{{ $usersActive ? 'menu-item-icon-active' : 'menu-item-icon-inactive' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
                                </span>
                                <span class="menu-item-text flex items-center gap-2">Users</span>
                                <svg class="ml-auto w-3 h-3 {{ $usersActive ? 'rotate-180 text-brand-500' : '' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </span>

                            <ul class="mt-2 space-y-1 ml-9">
                                <li>
                                    <a href="#"
                                    {{-- <a href="{{ route('admin.admins.index') }}" --}}
                                       class="menu-dropdown-item {{ request()->is('users/admin*') ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive' }}">
                                        Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                    {{-- <a href="{{ route('admin.operators.index') }}" --}}
                                       class="menu-dropdown-item {{ request()->is('users/staff*') ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive' }}">
                                        Staff
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </div>
</aside>
