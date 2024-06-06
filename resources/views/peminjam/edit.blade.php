<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 dark:text-gray-200 leading-tight">
            {{ __('Kelola Peminjam') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-color bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-white">
                    <form method="post" action="{{ route('peminjam.update', $pemohon->id) }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')
                        <div class="max-w-xl text-white">
                            <x-input-label for="instansi" value="Instansi" />
                            <x-text-input id="instansi" type="text" name="instansi" class="mt-1 block w-full" value="{{ old('instansi') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('instansi')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="nama_gedung" value="Nama Gedung" />
                            <x-text-input id="nama_gedung" type="text" name="nama_gedung" class="mt-1 block w-full" value="{{ old('nama_gedung') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_gedung')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="agenda" value="Agenda" />
                            <x-text-input id="agenda" type="text" name="agenda" class="mt-1 block w-full" value="{{ old('agenda') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('agenda')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="tanggal_peminjaman" value="Tanggal Peminjaman" />
                            <x-text-input id="tanggal_peminjaman" type="date" name="tanggal_peminjaman" class="mt-1 block w-full" value="{{ old('tanggal_peminjaman') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal_peminjaman')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="waktu_peminjaman" value="Waktu Peminjaman" />
                            <x-text-input id="waktu_peminjaman" type="time" name="waktu_peminjaman" class="mt-1 block w-full" value="{{ old('waktu_peminjaman') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('waktu_peminjaman')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="jumlah_peserta" value="Jumlah Peserta" />
                            <x-text-input id="jumlah_peserta" type="number" name="jumlah_peserta" class="mt-1 block w-full" value="{{ old('jumlah_peserta') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('jumlah_peserta')" />
                        </div>                      
                        <div class="max-w-xl text-white">
                            <x-input-label for="status" value="Status" />
                            <select id="status" name="status" class="mt-1 block w-full text-black">
                                <option value="1">Approved</option>
                                <option value="0">Pending</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="file" value="Unggah File" />
                            <input id="file" type="file" name="file" class="mt-1 block w-full" accept=".jpg, .jpeg, .png, .pdf" />
                            <x-input-error class="mt-2" :messages="$errors->get('file')" />
                        </div>   
                        <div>
                            <x-input-label for="users_id" value="Peminjam" />
                            <select name="users_id" id="users_id" class="mt-1 block w-full rounded-lg border-gray-300">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->nameuser }}</option>
                                @endforeach
                            </select>
                        </div>  
                        <div class="flex items-center gap-4">
                            <x-secondary-button tag="a" href="{{ route('peminjam.index') }}">Cancel</x-secondary-button>
                            <x-primary-button name="save" value="true">Update</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>