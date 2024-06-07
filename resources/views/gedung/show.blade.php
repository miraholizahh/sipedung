{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Detail Gedung') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold">{{ $gedung->nama_gedung }}</h3>
                    <p><strong>Tanggal Peminjaman:</strong> {{ $gedung->tanggal_peminjaman }}</p>
                    <p><strong>Kapasitas:</strong> {{ $gedung->kapasitas }}</p>
                    <p><strong>Fasilitas:</strong> {{ $gedung->fasilitas }}</p>
                    <p><strong>Status:</strong> 
                        @switch($gedung->status)
                            @case(1)
                                Tersedia
                                @break
                            @case(0)
                                Booking
                                @break
                            @default
                                Renovasi
                        @endswitch
                    </p>
                    <p><strong>Foto:</strong></p>
                    @if($gedung->foto)
                        <img src="{{ asset('storage/foto_gedung/'.$gedung->foto) }}" width="300px" alt="Foto Gedung">
                    @else
                        <p>No Image</p>
                    @endif
                    <div class="mt-4">
                        <x-primary-button tag="a" href="{{ route('buildingnav') }}">Back to List</x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
