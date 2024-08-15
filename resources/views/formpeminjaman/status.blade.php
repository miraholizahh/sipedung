<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar></x-navbar>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-color bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-white">
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
                            </tr>
                        </x-slot>

                        @php $num = 1; @endphp
                        @foreach($peminjaman as $borrow)
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
                                </tr>
                            {{-- @endif --}}
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>