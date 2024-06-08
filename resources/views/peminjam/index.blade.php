<!-- resources/views/peminjam/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Kelola Peminjam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <div style="text-align: right;">
                        <x-primary-button tag="a" href="{{ route('peminjam.create') }}">Add Data</x-primary-button>
                    </div>

                    <x-table>
                        <x-slot name="header">  
                            <tr>
                                <th>No</th>
                                <th>Instansi</th>
                                <th>Agenda</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Waktu Peminjaman</th>
                                <th>Jumlah Peserta</th>
                                <th>File</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </x-slot>

                        @php $num = 1; @endphp
                        @foreach($borrows as $borrow)
                            {{-- @if($borrow->user && !$borrow->user->hasRole('admin'))  --}}
                                <tr>
                                    <td>{{ $num++ }}</td>
                                    <td>{{ $borrow->instansi }}</td>
                                    <td>{{ $borrow->agenda }}</td>
                                    <td>{{ $borrow->tanggal_peminjaman }}</td>
                                    <td>{{ $borrow->waktu_peminjaman }}</td>
                                    <td>{{ $borrow->jumlah_peserta }}</td>
                                    <td>
                                        @if($borrow->file_path)
                                            <a href="{{ asset('storage/' . $borrow->file_path) }}" target="_blank">Download</a>
                                        @else
                                            No File
                                        @endif
                                    </td>
                                    <td>
                                        @if($borrow->status == 0)
                                            <p>Diproses</p>
                                        @elseif($borrow->status == 1)
                                            <p>Disetujui</p>
                                        @else
                                            <p>Ditolak</p>
                                        @endif
                                    </td>
                                    <td>
                                        <x-primary-button tag="a" href="{{ route('peminjam.edit', $borrow->id) }}"> Edit </x-primary-button>
                                        <x-danger-button
                                            x-data=""
                                            x-on:click.prevent="
                                                $dispatch('open-modal', 'confirm-peminjam-deletion');
                                                $dispatch('set-action', '{{ route('peminjam.destroy', $borrow->id) }}');">
                                            {{ __('Delete') }}
                                        </x-danger-button>
                                    </td>
                                </tr>
                            {{-- @endif --}}
                        @endforeach
                    </x-table>

                    <x-modal name="confirm-peminjam-deletion" focusable maxWidth="xl">
                        <form method="post" x-bind:action="action" class="p-6">
                            @csrf
                            @method('delete')
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Apakah anda yakin akan menghapus data?') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Setelah proses dilaksanakan. Data akan dihilangkan secara permanen.') }}
                            </p>
                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>
                                <x-danger-button class="ml-3">
                                    {{ __('Delete!!!') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
