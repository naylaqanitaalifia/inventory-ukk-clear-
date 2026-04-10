@extends('layouts.fullscreen-layout')

@section('content')
    <div class="relative z-1 bg-white p-6 sm:p-0 dark:bg-gray-900">
        <div class="relative flex h-screen w-full flex-col justify-center sm:p-0 lg:flex-row dark:bg-gray-900">
            <!-- Form -->
            <div class="flex w-full flex-1 flex-col lg:w-1/2">
                <div class="mx-auto flex w-full max-w-md flex-1 flex-col justify-center">
                    <div>
                        <div class="mb-5 sm:mb-8">
                            <h1 class="text-title-sm sm:text-title-md mb-2 font-semibold text-gray-800 dark:text-white/90">
                                Login
                            </h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Silakan masuk untuk mulai melaporkan kendala fasilitas sekolah.
                            </p>
                        </div>
                        <div>
                            {{-- f --}}
                            <div class="space-y-5">
                                <x-form.form-elements.input
                                    label="Email"
                                    name="email"
                                    placeholder="Input email"
                                />

                                <x-form.form-elements.input
                                    label="Password"
                                    name="password"
                                    type="password"
                                    placeholder="Input password"
                                />

                                <!-- Checkbox opsional -->
                                {{-- <div class="flex items-center justify-between">
                                    <div x-daddsta="{ checkboxToggle: false }">
                                        <label for="checkboxLabelOne"
                                            class="flex cursor-pointer items-center text-sm font-normal text-gray-700 select-none dark:text-gray-400">
                                            <div class="relative">
                                                <input type="checkbox" id="checkboxLabelOne" class="sr-only" @change="checkboxToggle = !checkboxToggle" />
                                                <div :class="checkboxToggle ? 'border-brand-500 bg-brand-500' :
                                                    'bg-transparent border-gray-300 dark:border-gray-700'"
                                                    class="mr-3 flex h-5 w-5 items-center justify-center rounded-md border-[1.25px]">
                                                    <span :class="checkboxToggle ? '' : 'opacity-0'">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.6666 3.5L5.24992 9.91667L2.33325 7" stroke="white" stroke-width="1.94437" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#" class="text-brand-500 hover:text-brand-600 dark:text-brand-400 text-sm">
                                        Forgot password?
                                    </a>
                                </div> --}}
                                <!-- Button -->
                                <div>
                                    <button
                                        type="submit"
                                        class="bg-brand-500 shadow-theme-xs hover:bg-brand-600 flex w-full items-center justify-center rounded-lg px-4 py-3 text-sm font-medium text-white transition">
                                        Login
                                    </button>
                                </div>
                            </div>
                            {{-- <div class="mt-5">
                                <p class="text-center text-sm font-normal text-gray-700 sm:text-start dark:text-gray-400">
                                    Don't have an account?
                                    <a href="/signup" class="text-brand-500 hover:text-brand-600 dark:text-brand-400">Sign Up</a>
                                </p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-brand-600 relative hidden h-full w-full items-center lg:grid lg:w-1/2 dark:bg-white/5">
                <div class="z-1 flex items-center justify-center">
                    {{-- <div class="flex max-w-xs flex-col items-center">
                        <a href="/" class="mb-4 block">
                            <img src="" alt="Logo" />
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
