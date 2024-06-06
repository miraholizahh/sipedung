<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Kelola Gedung') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <div class="text-right mb-4">
                        <x-primary-button tag="a" href="{{ route('gedung.create') }}">Tambah Data</x-primary-button>
                    </div>

                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>No</th>
                                <th>Nama Gedung</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Kapasitas</th>
                                <th>Fasilitas</th>
                                <th>Status</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </x-slot>

                        @php $num = 1; @endphp
                        @foreach($buildings as $building)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $building->nama_gedung }}</td>
                                <td>{{ $building->tanggal_peminjaman }}</td>
                                <td>{{ $building->kapasitas }}</td>
                                <td>{{ $building->fasilitas }}</td>
                                <td>
                                    @if($building->status == 1)
                                        <p>Tersedia</p>
                                    @elseif($building->status == 0)
                                        <p>Booking</p>
                                    @else
                                        <p>Renovasi</p>
                                    @endif
                                </td>
                                <td>
                                    {{-- @if($building->foto) --}}
                                        <img src="{{ asset('storage/foto_gedung/'.$building->foto) }}" width="100px">
                                    {{-- @else
                                        <p>No Image</p> --}}
                                    {{-- @endif --}}
                                </td>
                                <td>
                                    <x-primary-button tag="a" href="{{ route('gedung.edit', $building->id) }}">Edit</x-primary-button>
                                    <x-danger-button
                                        x-data=""
                                        x-on:click.prevent="
                                            $dispatch('open-modal', 'confirm-gedung-deletion');
                                            $dispatch('set-action', '{{ route('gedung.destroy', $building->id) }}');">
                                        Hapus
                                    </x-danger-button>
                                </td>
                            </tr>
                        @endforeach
                    </x-table>

                    <x-modal name="confirm-gedung-deletion" focusable maxWidth="xl">
                        <form method="post" x-bind:action="action" class="p-6">
                            @csrf
                            @method('delete')
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Apakah Anda yakin akan menghapus data?
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                Setelah proses dilaksanakan, data akan dihilangkan secara permanen.
                            </p>
                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">Batal</x-secondary-button>
                                <x-danger-button class="ml-3">Hapus!!!</x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
