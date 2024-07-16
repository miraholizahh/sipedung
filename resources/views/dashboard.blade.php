<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white border shadow-sm rounded-xl dark:bg-blue-600 dark:border-neutral-700 dark:shadow-neutral-700/70 p-4 md:p-5">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Gedung
                            </h3>
                            <div class="text-4xl font-bold text-gray-800 dark:text-white text-center">
                                {{ $building_count }}
                            </div>
                            <a href="#" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-100 dark:hover:text-blue-400">
                                Card link
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="bg-white border shadow-sm rounded-xl dark:bg-green-500 dark:border-neutral-700 dark:shadow-neutral-700/70 p-4 md:p-5">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Peminjaman
                            </h3>
                            <div class="text-4xl font-bold text-gray-800 dark:text-white text-center">
                                {{ $borrow_count}}
                            </div>
                            <a href="#" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-100 dark:hover:text-blue-400">
                                Card link
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="bg-white border shadow-sm rounded-xl dark:bg-yellow-400 dark:border-neutral-700 dark:shadow-neutral-700/70 p-4 md:p-5">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Pemohon
                            </h3>
                            <div class="text-4xl font-bold text-gray-800 dark:text-white text-center">
                                {{ $user_count}}
                            </div>
                            <a href="#" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-100 dark:hover:text-blue-400">
                                Card link
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>