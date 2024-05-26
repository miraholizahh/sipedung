<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white text-white leading-tight">
            {{ __('Kelola Pemohon') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-white">
                    <div style="text-align: right;">
                        <x-primary-button tag="a" href="{{ route('pemohon.create') }}">Add Data</x-primary-button>
                    </div>
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>NIK</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Password</th>
                                <th>Status</th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($pemohons as $pemohon)
                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $pemohon->name }}</td>
                            <td>{{ $pemohon->nik }}</td>
                            <td>{{ $pemohon->email }}</td>
                            <td>{{ $pemohon->telepon }}</td>
                            <td>Tersembunyi</td>
                            <td>
                                @if($pemohon->status == 0)
                                    <p>Tidak Aktif</p>
                                @else
                                    <p>Aktif</p>
                                @endif
                            </td>
                            <td>
                                <x-primary-button tag="a" href="{{ route('pemohon.edit', $pemohon->id) }}"> Edit </x-primary-button>
                                <x-danger-button
                                x-data=""
                                x-on:click.prevent="
                                    $dispatch('open-modal', 'confirm-book-deletion');
                                    $dispatch('set-action', '{{ route('pemohon.destroy', $pemohon->id) }}');">
                                {{ __('Delete') }}
                                </x-danger-button>
                            </td>
                        </tr>
                        @endforeach
                    </x-table>

                    <x-modal name="confirm-book-deletion" focusable maxWidth="xl">
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