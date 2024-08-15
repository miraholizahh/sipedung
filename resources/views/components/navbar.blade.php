<header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-broken-white text-sm py-4 text-white">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none" href="#">
                <img class="w-5 h-auto mr-2" src="{{ asset('images/Lambang_Kabupaten_Cianjur.png') }}" alt="">
            </a>
            <a class="flex-none text-xl font-semibold dark:text-black" href="#">SIPEDUNG</a>
            <div class="sm:hidden">
                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10" data-hs-collapse="#navbar-with-collapse" aria-controls="navbar-with-collapse" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>
        </div>
        <div id="navbar-with-collapse" class="hidden transition-all duration-[0.1ms] overflow-hidden basis-full grow sm:block">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                <a class="font-semibold text-lg text-gray-600 hover:text-gray-400" href="homenav">Beranda</a>
                <a class="font-semibold text-lg text-gray-600 hover:text-gray-400" href="profilenav">Profil</a>
                <a class="font-semibold text-lg text-gray-600 hover:text-gray-400" href="contactnav">Kontak</a>
                @if(Route::has('login'))
                @auth
                <a class="font-semibold text-lg text-gray-600 hover:text-gray-400" href="buildingnav">Daftar Gedung</a>
                <a class="font-semibold text-lg text-gray-600 hover:text-gray-400" href="form">Peminjaman</a>
                <div class="font-semibold text-lg text-gray-600 hover:text-gray-400">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
                @else
                <a class="font-semibold text-lg text-gray-600 hover:text-gray-400" href="{{ route('login') }}">Masuk</a>
                <a class="font-semibold text-lg text-gray-600 hover:text-gray-400" href="{{ route('register') }}">Registrasi</a>
            @endauth
                @endif
            </div>
        </div>        
    </nav>
</header>