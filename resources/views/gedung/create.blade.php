<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 text-white leading-tight">
            {{ __('Kelola Gedung') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-color bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-white">
                    <form method="post" action="{{ route('gedung.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <div class="max-w-xl text-white">
                            <x-input-label for="nama_gedung" value="Nama Gedung" />
                            <x-text-input id="nama_gedung" type="text" name="nama_gedung" class="mt-1 block w-full" value="{{ old('nama_gedung') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_gedung')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="tanggal_peminjaman" value="Tanggal Peminjaman" />
                            <x-text-input id="tanggal_peminjaman" type="date" name="tanggal_peminjaman" class="mt-1 block w-full" value="{{ old('tanggal_peminjaman') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal_peminjaman')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="kapasitas" value="Kapasitas" />
                            <x-text-input id="kapasitas" type="text" name="kapasitas" class="mt-1 block w-full" value="{{ old('kapasitas') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('kapasitas')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="fasilitas" value="Fasilitas" />
                            <x-text-input id="fasilitas" type="text" name="fasilitas" class="mt-1 block w-full" value="{{ old('fasilitas') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('fasilitas')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="status" value="Status" />
                            <x-text-input id="status" type="text" name="status" class="mt-1 block w-full" value="{{ old('status') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>
                        <div>
                            <x-input-label for="foto" value="foto" />
                            <x-file-input id="foto" name="foto" class="mt-1 block w-full rounded-lg border-gray-300" />
                            <x-input-error class="mt-2" :messages="$errors->get('foto')" />
                        </div>
                        {{-- <div class="max-w-xl text-white">
                            <x-input-label for="file" value="Unggah File" />
                            <input id="foto" type="file" name="file" class="mt-1 block w-full" accept=".jpg, .jpeg, .png, .pdf" />
                            <x-input-error class="mt-2" :messages="$errors->get('file')" />
                        </div>    --}}
                        <x-secondary-button tag="a" href="{{ route('gedung.index') }}">Cancel</x-secondary-button>
                        <x-primary-button name="save" value="true">Save</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>